from fabric.api import local

def start():
    local('docker-compose -p poop -f infrastructure/orchestration/application.yml build')
    local('docker-compose -p poop -f infrastructure/orchestration/application.yml up -d')

def logs():
    local('docker-compose -p poop -f infrastructure/orchestration/application.yml logs -f')

def stop():
    local('docker-compose -p poop -f infrastructure/orchestration/application.yml stop')

def ssh():
    local('docker exec -t -i -u poop poop_application_1 /bin/bash')

def fix_perms():
    local('docker exec -t -i -u poop poop_application_1 /bin/bash -c "cd /var/www && chmod ugo-r main.css"')
