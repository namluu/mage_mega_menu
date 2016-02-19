If parent menu has child category and static block. The menu will show child category, not static block. 

If You Want to Display custom block with images or other html content in Menu Block, use the Static Block (CMS->Static Blocks section) with the ID like "mgmenu_", In Place "CategoryId" provide the ID of the category in which you want to display the block.e.g. mgmenu_28, mgmenu_100,...

You should have a image of the category.

If you define columns = 3 and the sub category = 4, the last item will be show on column 1 (fix from original code): bc\megamenu\Block\Navigation.php _explodeByColumns