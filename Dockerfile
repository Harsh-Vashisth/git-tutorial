#!/bin/bash
FROM ubuntu:18.04
#environment variable
 
#for non interactive sessions 
ENV DEBIAN_FRONTEND noninteractive

# Update the repository sources list
RUN apt-get update && apt-get -y dist-upgrade
# Install utils
RUN apt-get install -y apt-utils
# Create moodledata directory
RUN mkdir -p /var/www/moodledata
# Assign permission to moodledata
RUN chmod -R 0777 /var/www/moodledata
# Git installstion
RUN apt install -y git
# Clone a repository

# Move the repo to desired location
RUN mv nidm /var/www/html/
COPY config.php /var/www/html/nidm
# Install and run apache
RUN apt-get install -y apache2
# and then:
RUN apt update && apt install -y tcl
# Install php
RUN apt install php libapache2-mod-php php-mysql -y

#restart apache
RUN service apache2 restart

ENV APACHE_LOG_DIR /var/log/apache2

CMD apachectl -D FOREGROUND
