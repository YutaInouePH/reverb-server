FROM public.ecr.aws/nginx/nginx:1.24.0-alpine AS base

RUN apk --no-cache add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/conf.d/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/

FROM base AS local
