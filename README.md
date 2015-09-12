#BLumia's Typecho Themes

这是一些我自己制作并使用（过）的Typecho主题。

由于并非是前端出身，主题质量并不高。因此建议看看就好。如果您要使用某个主题，尽管修改后拿去用就是。当然，您需要保留页脚部分指向这里的链接。

可能需要对应的版本才能够使用这些主题，这些主题可能也都需要你修改一些地方才能更好的使用，在这里也会给出一些修改建议。

因为此处的主题代码和我实际使用的代码并不完全一致（我使用的代码有加彩蛋之类的东西XD），所以这些主题代码不保证完全没有问题，如果你遇到问题，欢迎直接向我提出或发起issue。

顺便，以下主题都支持文章中代码高亮。

##osu!next background theme
位于【next】文件夹

源自游戏[osu!](https://osu.ppy.sh/)的测试版曾出现过的背景三角，并根据之前所用的主题进行修改得到的主题。所以同时混有不正宗的material味道。
由于我使用disqus，所以并没有为自带的评论设计样式。你可能需要修改评论部分的样式代码

预览图：![osu!next background theme](https://raw.githubusercontent.com/BLumia/TypechoTheme/master/next/screenshot.png)

修改建议和相关说明：

1. header.php line64~77 由于我使用了独立的页面作为首页并且希望分类以下级目录的形式显示，所以当前代码如此。如果您只需要以分类作为最上层导航，请适当修改该部分代码以便为你所用。
2. 发表文章时添加cover字段以便在列表中指定预览图。

##Material Design Theme
位于【material】文件夹

仿照前Material Design官网风格设计的主题，技术不高所以仿的很不像

![Material Design Theme](https://raw.githubusercontent.com/BLumia/TypechoTheme/master/material/screenshot.png)

1. header.php line65~71  由于我使用了独立的页面作为首页并且希望分类以下级目录的形式显示，所以当前代码如此。如果您只需要以分类作为最上层导航，请适当修改该部分代码以便为你所用。
2. 发表文章时添加cover字段以便在列表中指定预览图。
3. 发表文章时添加headCover字段以便在文章页面指定页头图。