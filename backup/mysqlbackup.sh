DATE=`date +"%d_%b_%Y_%H:%M"`
BACKUP_LOCATION=/var/backup/db
SQLFILE=${BACKUP_LOCATION}/db_backup_${DATE}.sql
DATABASE=baselogin
USER=root
CONFIG_FILE_PATH=/home/carlos/mysqlcredentials.cnf


if [ ! -d $BACKUP_LOCATION ]; then
  echo "Directorio no encontrado, creando directorio…"
  mkdir -p ${BACKUP_LOCATION}
fi

mysqldump --defaults-extra-file=${CONFIG_FILE_PATH} -u ${USER} ${DATABASE}|gzip > ${SQLFILE}.gz

