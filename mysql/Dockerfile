# Derived from official mysql image (our base image)
FROM mysql:5.7
# Add a database
ENV MYSQL_DATABASE db
# Add the content of the sql-scripts/ directory to your image
# All scripts in docker-entrypoint-initdb.d/ are automatically
# executed during container startup
#ADD https://raw.githubusercontent.com/redman27/wiki/main/otpotpot_wiki.sql /tmp
COPY ./wordpress.sql /docker-entrypoint-initdb.d/
