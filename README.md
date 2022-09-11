# INCEPTION

Этот проект направлен на расширение знаний о системном администрировании с помощью Docker. Я виртуализировал несколько образов Docker, создав их на своей виртуальной машине.

Я настроил:
* Контейнер Docker, содержащий nginx - сервер.
* Контейнер Docker, содержащий WordPress + php-fpm без nginx.
* Контейнер Docker, содержащий MariaDB без nginx.
* Том, содержащий базу данных MariaDB.
* Том, содержащий файлы WordPress.
* Docker-сеть, которая устанавливает соединение между контейнерами.

Контейнеры перезапускаются в случае сбоя.

```mermaid
flowchart
    subgraph  
    w(("fa:fa-globe WWW"))<-.Port 443.->c3
        subgraph Computer HOST
            wp[("WordPress")]<.->c2
            d1[(DataBase)]<..->c1
            wp<.->c3
            subgraph n[Docker network]
                c1([Container MariaDB])
                c2([Container WordPress+PHP])
                c3([Container NGINX])
                c1<-.Port 3306.->c2
                c2<-.Port 9000.->c3
            end
        end
    end
    click c1 "https://github.com/aperop/inception/blob/master/srcs/requirements/mariadb/Dockerfile"
    click c2 "https://github.com/aperop/inception/blob/master/srcs/requirements/wordpress/Dockerfile"
    click c3 "https://github.com/aperop/inception/blob/master/srcs/requirements/nginx/Dockerfile"
    
```
