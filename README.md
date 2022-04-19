# Laravel + Swoole + php 8 测试工程

## 说明
这个仓库主要是用来测试 laravel 在PHP8环境下使用Swoole 和 php-fpm 模式的性能差异
使用Docker compose 管理，包含 mysql redis php nginx prometheus grafana,基本可以构建出一套测试环境了。
## 启动
先启动容器,laravel-s需要自己进入php容器启动
```bash
docker-compose up -d
```
## 说明
更多细节请自己阅读 docker-compose.yml 文件
