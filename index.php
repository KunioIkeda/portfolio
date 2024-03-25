<?php $pageTitle = "Kunio's Portfolio"; ?>
<?php require 'common/header.php'; ?>

<div id="loading">
    <div id="loadingLogo">
        <img src="images/pcLoading.png" alt="" class="load pc"><img src="images/spLoading.png" alt="" class="load sp">
    </div>
</div>

<section class="top" id="top">
    <p>kunio ikeda</p>
    <h1><span>池田 国生</span></h1>
    <address>
        <p class="add">〒302-xxxx<br>茨城県○○市△△0-0-0</p><br>
        <p class="tel"><a href="tel:000-0000-0000">000-0000-0000</a></p><br>
        <p class="mail"><a href="mailto:etude_3_10_3@.yahoo.co.jp">etude_3_10_3@.yahoo.co.jp</a></p>
    </address>
</section>

<section class="about" id="about">
    <h2>about</h2>
        <p>1982年5月、三鷹市出身。<br>独学で<span>html</span>と<span>css</span>を学びjavascriptと<span>php</span>も独学で学ぶが限界を感じ、<br>2023年に職業訓練校にてwebプログラミングについて学ぶ。<br>
        当サイトのソースコードはこちらから<br><a class="link" href="https://github.com/KunioIkeda/portfolio" target="_blank">kunio's portfolio (github)</a></p>
</section>

<section class="works" id="works">
    <h2>works</h2>
    <ul class="slider" id="slider">
        <li><a href="webProgramming1/index.html" target="_blank"><img src="images/reform1.jpg" alt="forpc" class="pc"><img src="images/reform2.jpg" alt="forsp" class="sp"></a></li>
        <li><a href="webProgramming2/index.html" target="_blank"><img src="images/taiwan1.jpg" alt="forpc" class="pc"><img src="images/taiwan2.jpg" alt="forsp" class="sp"></a></li>
        <li><a href="webProgramming3/index.php" target="_blank"><img src="images/donuts1.jpg" alt="forpc" class="pc"><img src="images/donuts2.jpg" alt="forsp" class="sp"></a></li>
    </ul>
    <button class="prev" id="prev"></button>
    <button class="next" id="next"></button>
    <ul class="indicator" id="indicator">
        <li class="list"></li>
        <li class="list"></li>
        <li class="list"></li>
    </ul>
</section>

<section class="contact" id="contact">
    <h2>contact</h2>
    <form method="post" action="confirm.php">
        <label>name<span>※</span><input type="text" name="name" required></label>
        <label>email<span>※</span><input type="email" name="email" required></label>
        <label>message<span>※</span><textarea type="text" name="message" required></textarea ></label>
        <label><input type="submit" value="send"></label>
    </form>
</section>

<?php require 'common/footer.php'; ?>