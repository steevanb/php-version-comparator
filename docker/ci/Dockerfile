FROM ubuntu:20.04

COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

ENV COMPOSER_HOME_PHP_5_6=/composer/php-5.6
ENV COMPOSER_HOME_PHP_7_0=/composer/php-7.0
ENV COMPOSER_HOME_PHP_7_1=/composer/php-7.1
ENV COMPOSER_HOME_PHP_7_2=/composer/php-7.2
ENV COMPOSER_HOME_PHP_7_3=/composer/php-7.3
ENV COMPOSER_HOME_PHP_7_4=/composer/php-7.4
ENV COMPOSER_HOME_PHP_8_0=/composer/php-8.0

ARG COMPOSER_JSON="{\"config\":{\"cache-dir\":\"/app/var/composer/cache\",\"sort-packages\":true},\"repositories\":[{\"type\":\"path\",\"url\":\"/app\"}]}"

RUN \
    apt-get update \
    && apt-get upgrade -y \
    # To add add-apt-repository
    && apt-get install -y software-properties-common \
    && LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php \
    && apt-get install -y \
        bash \
        shellcheck \
        php5.6-cli \
        php5.6-simplexml \
        php7.0-cli \
        php7.0-simplexml \
        php7.1-cli \
        php7.1-simplexml \
        php7.2-cli \
        php7.2-simplexml \
        php7.3-cli \
        php7.3-simplexml \
        php7.4-cli \
        php7.4-simplexml \
        php8.0-cli \
        php8.0-simplexml \
        # For coverage \
        php8.0-xdebug \
        # For PHPUnit and unused-scanner \
        php5.6-mbstring \
        php7.0-mbstring \
        php7.1-mbstring \
        php7.2-mbstring \
        php7.3-mbstring \
        php7.4-mbstring \
        php8.0-mbstring \
        # For Composer
        curl \
        zip \
        php7.1-curl \
        php7.2-curl \
        php7.3-curl \
        php7.4-curl \
        php8.0-curl \
        php8.0-zip \


    # Install for PHP 5.6
    && export COMPOSER_HOME="${COMPOSER_HOME_PHP_5_6}" \
    && mkdir -p "${COMPOSER_HOME_PHP_5_6}" \
    && echo "${COMPOSER_JSON}" > "${COMPOSER_HOME_PHP_5_6}"/composer.json \
    && php5.6 /usr/local/bin/composer global require phpunit/phpunit:5.7.* \
    # We will need to run composer require steevanb/php-version-compare before running phpunit
    # and it will be done with host user and not root
    && chmod -R 777 "${COMPOSER_HOME_PHP_5_6}" \

    # Install for PHP 7.0
    && export COMPOSER_HOME="${COMPOSER_HOME_PHP_7_0}" \
    && mkdir -p "${COMPOSER_HOME_PHP_7_0}" \
    && echo "${COMPOSER_JSON}" > "${COMPOSER_HOME_PHP_7_0}"/composer.json \
    && php7.0 /usr/local/bin/composer global require phpunit/phpunit:6.5.* \
    && chmod -R 777 "${COMPOSER_HOME_PHP_7_0}" \

    # Install for PHP 7.1
    && export COMPOSER_HOME=${COMPOSER_HOME_PHP_7_1} \
    && mkdir -p ${COMPOSER_HOME_PHP_7_1} \
    && echo "${COMPOSER_JSON}" > ${COMPOSER_HOME_PHP_7_1}/composer.json \
    && php7.1 /usr/local/bin/composer global require \
        phpstan/phpstan:0.12.* \
        phpstan/phpstan-deprecation-rules:0.12.* \
        phpstan/phpstan-strict-rules:0.12.* \
        phpstan/phpstan-phpunit:0.12.* \
        ergebnis/phpstan-rules:0.15.* \
        spaze/phpstan-disallowed-calls:1.9.* \
        phpunit/phpunit:7.5.* \
    && chmod -R 777 ${COMPOSER_HOME_PHP_7_1} \

    # Install for PHP 7.2
    && export COMPOSER_HOME=${COMPOSER_HOME_PHP_7_2} \
    && mkdir -p ${COMPOSER_HOME_PHP_7_2} \
    && echo "${COMPOSER_JSON}" > ${COMPOSER_HOME_PHP_7_2}/composer.json \
    && php7.2 /usr/local/bin/composer global require \
        phpstan/phpstan:0.12.* \
        phpstan/phpstan-deprecation-rules:0.12.* \
        phpstan/phpstan-strict-rules:0.12.* \
        phpstan/phpstan-phpunit:0.12.* \
        ergebnis/phpstan-rules:0.15.* \
        spaze/phpstan-disallowed-calls:1.9.* \
        phpunit/phpunit:8.5.* \
    && chmod -R 777 ${COMPOSER_HOME_PHP_7_2} \

    # Install for PHP 7.3
    && export COMPOSER_HOME=${COMPOSER_HOME_PHP_7_3} \
    && mkdir -p ${COMPOSER_HOME_PHP_7_3} \
    && echo "${COMPOSER_JSON}" > ${COMPOSER_HOME_PHP_7_3}/composer.json \
    && php7.3 /usr/local/bin/composer global require \
        phpstan/phpstan:0.12.* \
        phpstan/phpstan-deprecation-rules:0.12.* \
        phpstan/phpstan-strict-rules:0.12.* \
        phpstan/phpstan-phpunit:0.12.* \
        ergebnis/phpstan-rules:0.15.* \
        spaze/phpstan-disallowed-calls:1.9.* \
        phpunit/phpunit:9.5.* \
    && chmod -R 777 ${COMPOSER_HOME_PHP_7_3} \

    # Install for PHP 7.4
    && export COMPOSER_HOME=${COMPOSER_HOME_PHP_7_4} \
    && mkdir -p ${COMPOSER_HOME_PHP_7_4} \
    && echo "${COMPOSER_JSON}" > ${COMPOSER_HOME_PHP_7_4}/composer.json \
    && php7.4 /usr/local/bin/composer global require \
        phpstan/phpstan:0.12.* \
        phpstan/phpstan-deprecation-rules:0.12.* \
        phpstan/phpstan-strict-rules:0.12.* \
        phpstan/phpstan-phpunit:0.12.* \
        ergebnis/phpstan-rules:0.15.* \
        spaze/phpstan-disallowed-calls:1.9.* \
        phpunit/phpunit:9.5.* \
    && chmod -R 777 ${COMPOSER_HOME_PHP_7_4} \

    # Install for PHP 8.0
    && export COMPOSER_HOME=${COMPOSER_HOME_PHP_8_0} \
    && mkdir -p ${COMPOSER_HOME_PHP_8_0} \
    && echo "${COMPOSER_JSON}" > ${COMPOSER_HOME_PHP_8_0}/composer.json \
    && php8.0 /usr/local/bin/composer global require \
        phpstan/phpstan:0.12.* \
        phpstan/phpstan-deprecation-rules:0.12.* \
        phpstan/phpstan-strict-rules:0.12.* \
        phpstan/phpstan-phpunit:0.12.* \
        ergebnis/phpstan-rules:0.15.* \
        spaze/phpstan-disallowed-calls:1.9.* \
        phpunit/phpunit:9.5.* \

    # Install global CI tools
    && php8.0 /usr/local/bin/composer global require \
        steevanb/php-parallel-processes:0.1.* \
        symfony/console:5.3.* \
        maglnet/composer-require-checker:3.3.* \
        wapmorgan/php-deprecation-detector:2.0.* \
        steevanb/php-code-sniffs:4.2.* \
        insolita/unused-scanner:2.3.* \
        ergebnis/composer-normalize:2.15.* \
        infection/infection:0.25.* \

    && chmod -R 777 ${COMPOSER_HOME_PHP_8_0} \

    && ln -s ${COMPOSER_HOME_PHP_8_0}/vendor/bin/composer-require-checker /usr/local/bin/composer-require-checker \
    && ln -s ${COMPOSER_HOME_PHP_8_0}/vendor/bin/phpdd /usr/local/bin/phpdd \
    && ln -s ${COMPOSER_HOME_PHP_8_0}/vendor/bin/phpcs /usr/local/bin/phpcs \
    && ln -s ${COMPOSER_HOME_PHP_8_0}/vendor/bin/unused_scanner /usr/local/bin/unused-scanner \
    && ln -s ${COMPOSER_HOME_PHP_8_0}/vendor/bin/infection /usr/local/bin/infection \

    # This file is generated by infection/extension-installer
    # https://github.com/infection/extension-installer/issues/4
    && chmod 777 ${COMPOSER_HOME_PHP_8_0}/vendor/infection/extension-installer/src/GeneratedExtensionsConfig.php \

    # Purge
    && apt-get purge -y software-properties-common \
    && apt-get autoremove -y \
    && apt-get clean \
    && apt-get autoclean \
    && rm -rf /tmp/*

WORKDIR /app
