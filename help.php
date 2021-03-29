<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <title>About | Dave's Mapper | RPG Map Generator</title>
    <meta name="description" content="Information, help, and tips about the Dave's Mapper web app for role-playing enthusiasts."/>
    <meta name="keywords" content="RPG,dungeons and dragons,DnD,D&D,OSR,roleplaying,risus,dungeon master,game master,mapping,web app" />
    <?php include "includes/head.php"; ?>
  </head>
  <body class="single">
    <?php include "includes/magic.php"; ?>
    <section id="about">
      <h1>Dave's Mapper</h1>
        <p>Dave's Mapper is a tool that allows <abbr title="Game Masters">GMs</abbr>/<abbr title="Dungeon Masters">DMs</abbr> to generate random maps from a variety of map tiles created by artists in the gaming community.</p>
        <p>To begin, simply click the "Dave's Mapper" button at the top left of this page to go back to the app, and your first generated map will be waiting! To generate another map, simply click "New Map". Changing most settings will also generate a new map automatically.</p>
      <h2 id="modes">Modes</h2>
        <section class="columns">
        <!--[if (gt IE 7)|!(IE)]><!-->
          <h3>Capped Ends (Default)</h3>
            <p>This mode creates a (typically) closed map where every tile exits onto another tile in the map (with a few exceptions). This mode is best for most cases as it leaves few loose ends for the user to tie up.</p>
        <!--<![endif]-->
          <h3>Normal (Classic)</h3>
            <p>Normal mode creates a map where tiles on the edge of the map exit out into blank space. This mode is good for cases where you want to add more to the map later, or use it as part of a larger map.</p>
            <p>This mode is how the Morph Mapper and Monkey Mapper generated maps.</p>
          <h3>Staggered</h3>
            <p>Staggered mode creates maps like classic mode maps, but with one tile missing from every other row. Vertical connections still work, and this layout type adds interest to the map generated.</p>
        <!--[if (gt IE 7)|!(IE)]><!-->
          <h3>Staggered and Capped</h3>
            <p>Staggered and Capped mode is just like Staggered mode, but the short rows have edge tiles at the ends to make the map rectangular.</p>
        <!--<![endif]-->
        </section>
      <h2 id="tools">Tile Tools</h2>
        <section class="columns">
          <h3>Tile Menu</h3>
            <p>When you click a tile, a mini menu will appear in the top left corner of the tile allowing you some tile options.</p>
          <h3>Rotation</h3>
            <p>Tiles may be rotated 90 degrees using the button in the tile menu, or by double-clicking the tile. Tiles are automatically rotated in a random increment of 90 degrees when the map is first generated. Edge and corner tiles do not rotate.</p>
            <p>Not all browsers support this feature. Browsers that do include IE 7 and 8, Firefox 4, Opera 10.5, and modern versions of Chrome and Safari, as well as some others.</p>
          <h3>Swap Tiles</h3>
            <p>To swap two tiles, simply click the swap tile button in the tile menu and the first tile will zoom/fade out. Then click the next tile to make it swap with the first tile. Only tiles of the same type may be swapped (e.g. corner for corner, edge for edge).</p>
          <h3>Replace Tiles</h3>
            <p>If you don't like a tile, simply click the remove tile button in the tile menu, or hold Ctrl/Cmd and double-click the offending tile to replace it.</p>
        </section>
      <h2 id="features">Features</h2>
        <section class="columns">
          <h3>Tile Styles</h3>
            <p>A variety of tile sets are available and are grouped into categories. (Dungeons are the default.) Click to toggle on or off any tile set, or double-click a tile-set to isolate it. You can also double click a category heading (such as "Dungeons") to select all of the tiles in that category.</p>
          <h3>Grid Lines</h3>
            <p>Grid lines can be turned on. Each dungeon tile represents a 100 foot square, and you have the option of using 5 or 10 foot grid line spacing for your grid lines. More options may follow in the future.</p>
          <h3>Room Stocker</h3>
            <p>You can get random room stocking suggestions using the room stocker. It will generate 5 rooms worth of stock at a time.</p>
        </section>
      <h2>Saving Your Map</h2>
        <section class="columns">
          <p>You can save your full map as a PNG using the "Export to PNG" button in the View menu panel. This feature currently works with Normal and Capped modes.</p>
          <p>Alternately, the mapper uses print stylesheets to hide all the menus when printing, so you can print directly within the app. (There may be issues or limitations depending on your web browsers though.)</p>
          <p>A third option is to use a screen capture utility to grab the map. This can be handy with larger maps or modes that don't support export.</p>
        </section>
      <hr/>
      <h2 id="what">Map Key</h2>
        <p>These maps can be confusing when so many different artists with wildly different styles contribute. Here's a visual key to some of the things you'll find in the maps generated by the mapper.</p>
      <h2 id="common">Common Symbols</h2>
        <section class="columns key">
          <section class="keyimg"><img src="images/key/door.png" alt="Door" />
            <h3>Door</h3>
            <p>A box inside of a wall notes the presence of a door.</p></section>
          <section class="keyimg"><img src="images/key/secret.png" alt="Secret Door" />
            <h3>Secret Door</h3>
            <p>An S placed in a wall notes the presence of a secret door.</p></section>
          <section class="keyimg"><img src="images/key/trapdoor.png" alt="Trap Door" />
            <h3>Trap Door</h3>
            <p>A box with an S in it notes a hidden trapdoor, either in floor or ceiling. These can lead to other levels of the dungeon or to hidden rooms.</p></section>
          <section class="keyimg"><img src="images/key/stairs.png" alt="Staircase" />
            <h3>Staircase</h3>
            <p>A set of progressively longer lines notes a staircase. The longest lines represent the top of the staircase, and the shortest lines represent the bottom.</p></section>
          <section class="keyimg"><img src="images/key/tapestry.png" alt="Tapestry" />
            <h3>Tapestry</h3>
            <p>A squiggly line notes a tapestry or curtain. These may run along walls, hide a secret passage or door, or divide a room.</p></section>
        </section>
      <h2 id="uncommon">Uncommon Symbols</h2>
        <section class="columns key">
          <section class="keyimg"><img src="images/key/dbldoor.png" alt="Double Door" />
            <h3>Double Door</h3>
            <p>Two boxes next to each other in a wall note the presence of a double door.</p></section>
          <section class="keyimg"><img src="images/key/falsedoor.png" alt="False Door" />
            <h3>False Door</h3>
            <p>A bracket set against a wall represents a false door. Confound your friends and confuse your enemies! Make them consume precious time thinking they just haven't yet figured out how to open it!</p></section>
          <section class="keyimg"><img src="images/key/door-alt.png" alt="Alternate Door" />
            <h3>Alternate Door</h3>
            <p>This symbol was used in some very early dungeon publications. You could draw what was 'visible' on the side of viewing, without revealing if it was a true door, or a false door&hellip;</p></section>
          <section class="keyimg"><img src="images/key/spiral.png" alt="Spiral Staircase" />
            <h3>Spiral Staircase</h3>
            <p>A circle with lines radiating from the center and a light to dark spiral gradient denotes a spiral staircase.</p></section>
          <section class="keyimg"><img src="images/key/pittrap.png" alt="Pit Trap" />
            <h3>Pit Trap</h3>
            <p>A box with an X through it denotes a pit with false flooring over it, ready to drop the unwary into one or more hazards.</p></section>
        </section>
      <h2 id="special">Special Symbols</h2>
        <section class="columns key">
          <section class="keyimg"><img src="images/key/ballista.png" alt="Ballista" />
            <h3>Ballista</h3>
            <p>Giant crossbow the size of a catapult.</p></section>
          <section class="keyimg"><img src="images/key/big_statue.png" alt="Big Statue" />
            <h3>Big Statue</h3>
            <p>A statue of a human(oid) with outstretched arms.</p></section>
          <section class="keyimg"><img src="images/key/fist.png" alt="Fist" />
            <h3>Fist</h3>
            <p>A giant stone fist, or it could be wood, metal &hellip; or living flesh.</p></section>
        </section>
      <h2 id="copy">Copyright/Usage</h2>
        <section class="columns">
          <p>All tiles are owned by their respective artists and used here with permission from the artist. By default, they are licensed for personal use only. For sharing and commercial usage, some artists have provided licenses for their tiles in their profiles. For those that don't &#8212; or to ask for permission beyond what the default licenses allow &#8212; <a href="mailto:dave@davesmapper.com">e-mail Dave</a> and he will put you in contact with the appropriate artist(s).</p>
          <p>The tiles were made to be used in maps &#8212; so use them! But don't be a jerk &#8212; if you repost a generated map somewhere, don't claim it as your own work, and think about throwing a backlink here and/or to the tile artist(s).</p>
          <p>The app was designed and coded by me, <a href="http://www.thegriddle.net" target="_blank">David Millar</a>, with some of the functionality based on the original Morph Mapper and Monkey Mapper written by <a href="http://www.thefreerpgblog.com/" target="_blank">Rob Lang</a>. If you make tiles and want to include them, <a href="mailto:dave@davesmapper.com?subject=Mapper">let me know</a>. If you like the GUI or the app and you're looking for a UI designer with a wealth of print and web design experience, <a href="mailto:dave@davesmapper.com">I'm your guy</a>!</p>
        </section>
    </section>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
