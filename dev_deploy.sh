rm -rf themes/mtav/dist/*

yarn build

zip -r mtav.zip themes/mtav/

echo "Uploading theme zip file"

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem mtav.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/mtav/wp-content/themes

ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254 << EOF
  pwd
  cd wordpress/mtav/wp-content/themes
  pwd
  ls -alh
  echo "Extracting theme zip file"

  unzip -o mtav.zip -d mtav_temp
  rm -rf mtav && mv mtav_temp/themes/mtav/ ./mtav && rm -rf mtav_temp

  echo "Removing theme zip file"
  rm mtav.zip
  cd ../..
  wp theme activate mtav
EOF

rm mtav.zip

pwd

cd ../../..

# scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem /home/swapnil/Projects/mtav/plugins/advanced-custom-fields-pro.zip ubuntu@54.176.104.254:/home/ubuntu/wordpress/mtav/wp-content/plugins
