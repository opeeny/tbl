@echo off
echo Running dump...
cd C:\wamp\bin\mysql\mysql5.5.20\bin
mysqldump -u root -h localhost --password="" --extended-insert=FALSE --ignore-table=tblis_jcrc.alldatadownload_table --result-file="E:\TBLIS-AUTOMATIC-DATABASE-BACKUP\TBLIS_JCRC_Database_Backup_%date:~6,4%-%date:~3,2%-%date:~0,2%_%time:~-11,2%%time:~-8,2%.sql" tblis_jcrc
echo Done!