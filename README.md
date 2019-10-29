# php-docker
php的docker开发环境，可参照着快速搭建自己的docker开发环境

## composer 的用法
直接进 `build` 目录，使用 `docker-compose exec php composer` 就可以使用了，因为 docker-compose.yaml 中设置了工作目录为 www 目录，安装后的 vender 也会在 www 目录下

## 建议
镜像来源可以直接在 [https://hub.docker.com/](https://hub.docker.com/) 中搜索获取，详细页会有镜像的用法说明，共勉
