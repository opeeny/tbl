@echo off
echo Running dump...
cd C:\wamp\bin\mysql\mysql5.6.17\bin
mysqldump -u root -h localhost --password="" --extended-insert=FALSE --result-file="D:\LICTS WORK\TBLIS_Backup_%date:~6,4%-%date:~3,2%-%date:~0,2%_%time:~-11,2%%time:~-8,2%.sql" tblis_jcrc
echo Done!