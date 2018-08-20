<?php
shell_exec("AWS_ACCESS_KEY_ID=AXXXXXXXXXXXXXXA AWS_SECRET_ACCESS_KEY=XXXXXXXXXXXXXXXXXXXX aws ec2 start-instances --instance-ids i-0xxxxxxxxxa --region ap-south-1");
header('Location: http://13.x.x.x/index.html?success=true');
?>
