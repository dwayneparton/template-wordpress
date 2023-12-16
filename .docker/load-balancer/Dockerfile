FROM nginx
COPY .docker/load-balancer/nginx.conf /etc/nginx/nginx.conf
COPY .docker/load-balancer/openssl.conf /etc/nginx/certs/openssl.conf

RUN apt-get update \
	&& apt-get install -y openssl

RUN openssl req -x509 -new -config /etc/nginx/certs/openssl.conf -keyout /etc/nginx/certs/server.key -out /etc/nginx/certs/server.crt -days 365