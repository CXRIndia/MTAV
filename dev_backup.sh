ssh -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254 << EOF
  cd wordpress/mtav/wp-content/
  ls -alh
  rm -rf uploads.zip && zip -r uploads.zip uploads/

  cd ../../..
  rm -rf mtav.sql
  mysqldump -u root -pxsCKfqnk6PDQ mtav > mtav.sql
EOF

scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254:/home/ubuntu/wordpress/mtav/wp-content/uploads.zip ~/Workspace/mtav/backup/
scp -i ~/.ssh/mark4-qa-server-cemtrexlabs.pem ubuntu@54.176.104.254:/home/ubuntu/mtav.sql ~/Workspace/mtav/backup/
