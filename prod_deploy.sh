yarn build

zip -r mtav.zip themes/mtav/

echo "Uploading theme zip file"

scp -i ~/.ssh/mtav_production.pem mtav.zip ubuntu@3.225.88.143:/home/ubuntu/wordpress/mtav_stage/wp-content/themes

ssh -i ~/.ssh/mtav_production.pem ubuntu@3.225.88.143 << EOF
  pwd
  cd wordpress/mtav_stage/wp-content/themes
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

# scp -i ~/.ssh/mtav_production.pem /home/swapnil/Projects/mtav/plugins/advanced-custom-fields-pro.zip ubuntu@3.225.88.143:/home/ubuntu/wordpress/mtav_stage/wp-content/plugins
