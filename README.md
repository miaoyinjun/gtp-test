# Dingcheng B2B Realty WordPress Theme

这是一个可直接安装的 WordPress 企业展示主题，适用于 B2B 房产企业官网。

## 安装方式

1. 将当前目录打包为 zip（目录名建议 `dingcheng-b2b-realty`）。
2. 登录 WordPress 后台：**外观 > 主题 > 安装主题 > 上传主题**。
3. 上传 zip 并启用主题。
4. 在 **设置 > 阅读** 中将首页设置为静态页面（可选，推荐）。

## 主题结构（多页面）

当前主题已改为**非单页面**结构：

- 首页：`front-page.php`
- 业务板块页：`page-services.php`
- 客户案例页：`page-cases.php`
- 核心优势页：`page-advantages.php`
- 关于我们页：`page-about.php`
- 商务咨询页：`page-contact.php`

请在 WordPress 后台创建以下固定链接页面（slug）：

- `/services/`
- `/cases/`
- `/advantages/`
- `/about/`
- `/contact/`

导航栏会自动根据页面 slug 获取真实链接（兼容普通固定链接与朴素链接模式）。

另外，`page-*.php` 已添加模板名称；如 slug 不一致，也可以在页面编辑器里手动选择对应模板。

## 主题文件

- `style.css`：主题信息头 + 全站样式。
- `functions.php`：主题能力与资源加载。
- `front-page.php`：官网首页模板。
- `page-*.php`：各业务子页面模板。
- `index.php`：兜底模板。
- `header.php` / `footer.php`：公共页头页脚。
- `assets/js/theme.js`：咨询表单前端交互。
