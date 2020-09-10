# sBlog
The blog system that's as secure as you are!

While setting up a homepage I wanted to take a simple minimalistic approach that ignored the bloat of most current CMSs (this bloat exists for a reason and has the purpose, so if you need it use it). But I also wanted to avoid having to edit an "index" page every time I added a breifing or a blog post. So I went on the hunt for a simple blogging platform that just took posts, listed them, then displayed them. No logins, no comments, no fancy themes, no add-ons, no databases. Nothing else at all.

Well that didn't exists. Everything had some sort of editor, or required MySQL, or was just a little too much bloat. So I solved this problem the best way I know how. I wrote my own.

So here is sBlog (pronounced as one word: sblaug, not s-blog). The simple blog. It consists of 2 pages, 1 folder, and one settings file (YAY for .INI)! 

Installation is easy. You just upload the files and folder into whatever directory you want on your webpage, and voila it's installed. Any time you want to post something, you just add a .txt file, with your post title as its filename, to the posts folder and it'll get listed alphabetically on the index.php page. When you click on the link title it'll take you to the post using the view.php page. It's that simple. 

The settings are simple too. You can adjust the width of the page, the length of the excerpts for the index, the blog title, and the blog url. 

In case you haven't realized it yet. This isn't some SEO optimized CMS that's going to be a WORDPRESS killer. It's a way for you to display a list of ideas quickly and easily. It doesn't sort by date. It doesn't sort by category. It doesn't have a fancy rich text editor. It just shows what text files you put in there. It doesn't even support markdown (adding a library would defeat the purpose of this system). It does support HTML though, so if you use HTML tags they'll get interpreted when displayed on view.php. Which brings me to my final point.

This blog is as secure as your server is. Anything in those .txt files will be interpreted including \<Script> tags. So don't let anyone write to the folder where you're uploading your posts, and don't add anything stupid yourself and you'll be ok. Like the tagline says, it's only as secure as you are.
