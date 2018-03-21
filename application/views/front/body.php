<style>
    .featured_posts .post .featured-img.featured-img-big, .inner-page-bannerHolder .inner-banner, .inner-page-bannerHolder .inner-banner img, .banner-top-story {
    height: auto !important;
}
</style>
<?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?>
    <?php $channel = 'cnn'; ?>
    <?php $channel2 = 'usa-today'; ?>
    <?php $music = 'mtv-news'; ?>
    <?php $geographics = 'national-geographic'; ?>
    <?php $entertaiment = 'mashable'; ?>
    <?php $headline = 'the-new-york-times'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'breitbart-news';
        $channel2 = 'usa-today';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'hacker-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'cnn';
        $channel2 = 'google-news';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-washington-post';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'bloomberg';
        $channel2 = 'cnbc';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'new-york-magazine';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'hacker-news';
        $channel2 = 'recode';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'associated-press';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'newsweek';
        $channel2 = 'cnn';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'al-jazeera-english';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'mtv-news';
        $channel2 = 'new-york-magazine';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'buzzfeed';
        $channel2 = 'entertainment-weekly';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'time';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'time';
        $channel2 = 'the-new-york-times';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'reddit-r-all';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'espn';
        $channel2 = 'fox-sports';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'google-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'new-scientist';
        $channel2 = 'national-geographic';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'cnn';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'newsweek';
        $channel2 = 'google-news';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
<?php } else if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?>
    <?php $channel = 'abc-news-au'; ?>
    <?php $channel2 = 'the-guardian-au'; ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'national-geographic'; ?>
    <?php $entertaiment = 'the-lad-bible'; ?>
    <?php $headline = 'metro'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'business-insider';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'cnbc';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'breitbart-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'breitbart-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-telegraph';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'espn';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-telegraph';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'abc-news-au';
        $channel2 = 'the-guardian-au';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'financial-times';
    }
    ?>
<?php } else if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?>
    <?php $channel = 'der-tagesspiegel'; ?>
    <?php $channel2 = 'focus'; ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'new-scientist'; ?>
    <?php $entertaiment = 'the-lad-bible'; ?>
    <?php $headline = 'handelsblatt'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'bild';
        $channel2 = 'der-tagesspiegel';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'spiegel-online';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'handelsblatt';
        $channel2 = 'die-zeit';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'gruenderszene';
        $channel2 = 't3n';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'die-zeit';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'financial-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'gruenderszene';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'daily-mail';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'espn';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'daily-mail';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'gruenderszene';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'der-tagesspiegel';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
<?php } else if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?>
    <?php $channel = 'bbc-news'; ?>
    <?php $channel2 = 'the-guardian-uk'; ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'new-scientist'; ?>
    <?php $entertaiment = 'daily-mail'; ?>
    <?php $headline = 'financial-times'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'financial-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'the-economist';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-economist';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'business-insider-uk';
        $channel2 = 'financial-times';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'mtv-news-uk';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'business-insider-uk';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'daily-mail';
        $channel2 = 'the-lad-bible';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'business-insider-uk';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'four-four-two';
        $channel2 = 'bbc-sport';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'mirror';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
<?php } else if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?>
    <?php $channel = 'football-italia'; ?>
    <?php $channel2 = 'the-guardian-uk'; ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'new-scientist'; ?>
    <?php $entertaiment = 'daily-mail'; ?>
    <?php $headline = 'financial-times'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'the-economist';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'cnn';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'business-insider-uk';
        $channel2 = 'financial-times';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'google-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'mtv-news-uk';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'new-york-magazine';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'daily-mail';
        $channel2 = 'the-lad-bible';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-washington-post';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'four-four-two';
        $channel2 = 'bbc-sport';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'associated-press';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'bbc-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
<?php } else if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?>
    <?php $channel = 'the-times-of-india'; ?>
    <?php $channel2 = 'the-hindu'; ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'new-scientist'; ?>
    <?php $entertaiment = 'daily-mail'; ?>
    <?php $headline = 'financial-times'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'hacker-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-next-web';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'techcrunch';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'engadget';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'the-wall-street-journal';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'breitbart-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'the-times-of-india';
        $channel2 = 'the-hindu';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
<?php } else { ?>
    <?php
    $channel = 'bbc-news';
    $channel2 = 'newsweek';
    ?>
    <?php $music = 'mtv-news-uk'; ?>
    <?php $geographics = 'national-geographic'; ?>
    <?php $entertaiment = 'daily-mail'; ?>
    <?php $headline = 'financial-times'; ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'news') {
        $channel = 'breitbart-news';
        $channel2 = 'usa-today';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'economy') {
        $channel = 'the-economist';
        $channel2 = 'financial-times';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'breitbart-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'business') {
        $channel = 'bloomberg';
        $channel2 = 'cnbc';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sci_tech') {
        $channel = 'hacker-news';
        $channel2 = 'the-guardian-uk';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'markets') {
        $channel = 'bbc-news';
        $channel2 = 'cnn';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'breitbart-news';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'arts') {
        $channel = 'mtv-news';
        $channel2 = 'new-york-magazine';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'buzzfeed';
        $headline = 'buzzfeed';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'life') {
        $channel = 'the-times-of-india';
        $channel2 = 'entertainment-weekly';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'mashable';
        $headline = 'buzzfeed';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'real_estate') {
        $channel = 'spiegel-online';
        $channel2 = 'the-new-york-times';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'entertainment-weekly';
        $headline = 'fox-sports';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'sports') {
        $channel = 'espn';
        $channel2 = 'fox-sports';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'buzzfeed';
        $headline = 'the-new-york-times';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'weather') {
        $channel = 'new-scientist';
        $channel2 = 'national-geographic';
        $music = 'mtv-news-uk';
        $geographics = 'new-scientist';
        $entertaiment = 'mashable';
        $headline = 'polygon';
    }
    ?>
    <?php
    if ($this->router->class === 'mycon' && $this->router->method === 'traffic') {
        $channel = 'newsweek';
        $channel2 = 'spiegel-online';
        $music = 'mtv-news';
        $geographics = 'national-geographic';
        $entertaiment = 'entertainment-weekly';
        $headline = 'ign';
    }
    ?>
<?php  }



?>
<div class="container">    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
        <div class="carousel-inner" role="listbox"> 
            <div class="item active"> 
                <section class="row featured_posts">   
                    <?php if (!empty($worldarticles) && $worldarticles[$channel]) { ?>  
                        <?php $i = 1; ?>

                        <?php foreach ($worldarticles[$channel] as $key => $value) { ?>
                            <?php if ($i == 1) { ?>
                                <div class="col-sm-6 nopadding" style="height: 450px;">    
                                    <div class="post"> 
                                        <img style="height: 450px !important;" src="<?php echo $value['urlToImage']; ?>" alt="" class="featured-img featured-img-big">  
                                        <div class="featured_posts_content">              
                                            <h2 class="title"><a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view"><?php echo $value['title']; ?></a></h2>
                                            <ul class="post_meta nav nav-pills">             
                                                <li><a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view"><?php echo $value['publishedAt']; ?></a></li>
                                                <li><a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view"><i class="fa fa-thumbs-o-up"></i> Read Story</a></li>
                                            </ul>           
                                        </div>              
                                    </div>    
                                </div>    
                                <div class="col-sm-2 nopadding">   
                                <?php } else { ?>
                                    <div class="post"> 
                                        <img src="<?php echo $value['urlToImage']; ?>" alt="" class="featured-img featured-img-small">    
                                        <div class="featured_posts_content">   
                                            <h5 class="title"><a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a></h5>
                                        </div>            
                                        <div class="clearfix"></div>   
                                    </div>  
                                <?php } ?>
                                <?php if ($i == 4 || count($worldarticles[$channel]) == $i) { ?>
                                </div>  
                                <?php break; ?>
                            <?php } ?>
                            <?php $i++; ?>
                        <?php } ?>
                    <?php } ?>
                    <div class="col-sm-4">    
                        <div id="parentHorizontalTab">   
                            <ul class="resp-tabs-list hor_1">
                                <li>Headlines</li>           
                                <li>Business news</li>  
                            </ul>            
                            <div class="resp-tabs-container hor_1" >          
                                <div class="panel panel-default" style="height: 400px;">            
                                    <div class="panel-body">  
                                        <?php if (!empty($worldarticles) && $worldarticles[$channel2]) { ?> 
                                            <ul class="headlines">   
                                                <?php foreach ($worldarticles[$channel2] as $key => $value) { ?>
                                                    <li class="news-item">
                                                        <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" >
                                                            <?php echo $value['title']; ?></a></li>
                                                <?php } ?>
                                            </ul>     
                                        <?php } ?>  
                                    </div>             
                                    <div class="clearfix"></div>   
                                </div>            
                                <div class="panel panel-default" style="display:none; height: 400px;">         
                                    <div class="panel-body">   
                                        <?php if (!empty($worldarticles) && $worldarticles['cnbc']) { ?>
                                            <ul class="financial_news">  
                                                <?php foreach ($worldarticles['cnbc'] as $key => $value) { ?>
                                                    <li class="news-item"><a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a></li>
                                                <?php } ?>   
                                            </ul> 
                                        <?php } ?>              
                                    </div>  
                                    </ul>                
                                </div>               
                                <div class="clearfix"></div>      
                            </div>    
                        </div>    
                    </div>    
            </div>    
            </section>   
            <section class="middle-part">   
                <article class="col-sm-8 home-left">  
                    <div class="row">   
                        <?php if (!empty($worldarticles) && $worldarticles['espn']) { ?>   

                            <?php $j = 1; ?>
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <?php foreach ($worldarticles['espn'] as $key => $value) { ?>
                                    <?php if (!empty($value['urlToImage'])) { ?>
                                        <div class="item col-sm-6 col-md-4">          
                                            <div class="thumbnail"> 
                                                <img class="group list-group-image" src="<?php echo $value['urlToImage']; ?>" alt="" />  
                                                <div class="caption">                              
                                                    <ul class="hgpm-meta">                       

                                                        <li><span class="js-asset-timestamp"><?php echo $value['publishedAt']; ?></span></li>    
                                                    </ul>                                  
                                                    <h4 class="list-group-item-heading">
                                                        <a href="#"  onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a></h4>
                                                    <p class="list-group-item-text"><?php echo substr($value['description'],0,70).'...'; ?></p>
                                                </div>                         
                                            </div>                       
                                        </div>   
                                        <?php if ($j == 3 || count($worldarticles['espn']) == $j) { ?>
                                            <?php $j = 0; ?>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12"> 
                                        <?php } ?>
                                        <?php $j++; ?>
                                    <?php } ?> 

                                <?php } ?>       
                            </div>
                        <?php } ?>
                    </div> 
                    <hr>   
                    <div class="row">  
                        <?php if (!empty($worldarticles) && $worldarticles['business-insider']) { ?>  
                            <?php $i = 1; ?>
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <?php foreach ($worldarticles['business-insider'] as $key => $value) { ?>
                                    <?php if (!empty($value['urlToImage'])) { ?>
                                        <div class="col-xs-12 col-sm-6 col-md-3"> 
                                            <a href="#" class="hgpfm-link" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view">
                                                <div class="hgpfm-container">        
                                                    <div class="hgpfm-image-wrap">
                                                        <img class="img-responsive" src="<?php echo $value['urlToImage']; ?>" data-crop="1_1" >
                                                    </div>                  
                                                    <span class="hgpfm-asset-section business-bg">Business</span>
                                                </div>              
                                                <p class="hgpfm-txt"><?php echo substr($value['title'],0,70).'...'; ?></p>   
                                            </a> 
                                        </div>   
                                        <?php if ($i == 4 || count($worldarticles['business-insider']) == $i) { ?>
                                            <?php $i = 0; ?>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12"> 
                                        <?php } ?>
                                        <?php $i++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?> 
                    </div>  
                    <hr>

                    <div class="row">    
                        <div class="col-xs-12">   
                            <div id="parentHorizontalTab-2">  
                                <ul class="resp-tabs-list hor_1">  
                                    <li>World Indices</li>        
                                    <li>Stock</li>          
                                    <li>Foreign Exchange</li>  
                                    <li>Currency Converter</li>  
                                </ul>                   
                                <div class="resp-tabs-container hor_1">
                                    <div class="stock-news-holder"> 
                                        <img src="<?php echo base_url(); ?>assets1/images/indices.jpg" class="img-responsive img-thumbnail">  
                                        <h4 class="text-uppercase">World Indices</h4>    
                                        <div class="table-responsive">        
                                            <iframe id="iframeId1" frameborder="0"  height="402" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslindrates.forexprostools.com/index.php?force_lang=56&pairs_ids=166;27;175;172;176;177;168;167;174;954864;170;14601;53094;178;179;959210;44399;&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&open=show&last_update=show"></iframe>              
                                        </div>                  
                                        <div class="clearfix"></div>  
                                    </div>                  
                                    <div class="stock-news-holder">
                                        <img src="<?php echo base_url(); ?>assets1/images/stocks.jpg" class="img-responsive img-thumbnail"> 
                                        <h4 class="text-uppercase">Stock</h4>                   
                                        <div class="table-responsive">                      
                                            <iframe style="float:left;" width="320" noresize="noresize" scrolling="no" height="300" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=60344"></iframe>
                                            <iframe width="400" noresize="noresize" scrolling="no" height="300" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=60345"></iframe>
                                        </div>                     
                                        <div class="clearfix"></div> 
                                        <h4 class="text-uppercase">Leading Stock</h4> 
                                        <div class="leadingstock">
                                            <iframe frameborder="0" scrolling="no" height="1637" width="619" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssleqrates.forexprostools.com/index.php?force_lang=56&pairs_ids=23641;22982;23552;22983;23640;23349;23343;347;39128;345;346;6283;358;323;317;316;321;332;22860;23625;22888;22468;22091;23619;25406;25405;995066;23602;1024269;442;441;449;1024192;945627;497;564;1015176;1015253;1015205;7596;7722;943405;44248;44332;44122;44217;44225;44243;8580;32485;8576;8561;41382;41374;8808;8736;8759;8785;8747;13804;13805;13896;958807;976863;13905;13898;13910;13912;13914;958809;958810;50553;40905;51870;&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&last_update=show"></iframe>
                                            <iframe frameborder="0" scrolling="no" height="1637" width="619" allowtransparency="true" marginwidth="0" marginheight="0" src="https://www.youtube.com/user/nydailynews"></iframe>
                                        </div>

                                    </div>                     
                                    <div class="stock-news-holder">
                                        <img src="<?php echo base_url(); ?>assets1/images/exchange.jpg" class="img-responsive img-thumbnail">             
                                        <h4 class="text-uppercase">Foreign Exchange</h4>  
                                        <div class="table-responsive">           
                                            <!--https://in.investing.com/webmaster-tools/    https://freecurrencyrates.com/en/get-widget/table#fi;Classic%20Black;600;;;USD-EUR-GBP-RUB-RUB-AED-AFN-ALL-AMD-ANG-AOA-ARS-AWG-AZN-BAM-BBD-BGN-BHD-BIF;true -->

                                            <div id='gcw_mainFmiN9vD2X' class='gcw_mainFmiN9vD2X'></div>

                                            <script>function reloadFmiN9vD2X() {
                                                    var sc = document.getElementById('scFmiN9vD2X');
                                                    if (sc)
                                                        sc.parentNode.removeChild(sc);
                                                    sc = document.createElement('script');
                                                    sc.type = 'text/javascript';
                                                    sc.charset = 'UTF-8';
                                                    sc.async = true;
                                                    sc.id = 'scFmiN9vD2X';
                                                    sc.src = 'https://freecurrencyrates.com/en/widget-table?iso=USDEURGBPRUBRUBAEDAFNALLAMDANGAOAARSAWGAZNBAMBBDBGNBHDBIF&df=1&p=FmiN9vD2X&v=fi&source=yahoo&width=600&width_title=0&firstrowvalue=1&thm=cccccc,F9F9F9,A3A3A3,333333,eeeeee,cccccc,ffffff,222222,000000&title=Currency%20Converter&tzo=-330';
                                                    var div = document.getElementById('gcw_mainFmiN9vD2X');
                                                    div.parentNode.insertBefore(sc, div);
                                                }
                                                reloadFmiN9vD2X();</script>

                                        </div>                   
                                        <div class="clearfix"></div>  
                                    </div> 
                                    <div class="stock-news-holder">
                                        <img src="<?php echo base_url(); ?>assets1/images/exchange.jpg" class="img-responsive img-thumbnail">             
                                        <h4 class="text-uppercase">Currency Converter</h4>  
                                        <div class="table-responsive">           
                                            <iframe height="400" width="100%" frameborder="0" scrolling="no" src="https://ssltools.forexprostools.com/currency-converter/index.php?from=17&to=12&force_lang=56"></iframe>
                                        </div>                   
                                        <div class="clearfix"></div>  
                                    </div> 
                                </div>          
                            </div>           
                        </div>          
                    </div>          
                    <hr> 
                    <div class="row">  
                        <h2 class="col-xs-12">Voice</h2>   
                        <?php if (!empty($worldarticles) && $worldarticles['new-york-magazine']) { ?>  
                            <?php $i = 1; ?>
                            <div class="col-xs-12 col-sm-12 col-md-12"> 
                                <?php foreach ($worldarticles['new-york-magazine'] as $key => $value) { ?>
                                    <?php if (!empty($value['urlToImage'])) { ?>
                                        <div class="col-xs-12 col-sm-6 col-md-3"> 
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" class="hgpfm-link">
                                                <div class="hgpfm-container">        
                                                    <div class="hgpfm-image-wrap">
                                                        <img class="img-responsive" src="<?php echo $value['urlToImage']; ?>" data-crop="1_1" >
                                                    </div>                  
                                                    <span class="hgpfm-asset-section business-bg">Voice</span>
                                                </div>              
                                                <p class="hgpfm-txt"><?php echo $value['title']; ?></p>   
                                            </a> 
                                        </div>   
                                        <?php if ($i == 4 || count($worldarticles['business-insider']) == $i) { ?>
                                            <?php $i = 0; ?>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12"> 
                                        <?php } ?>
                                        <?php $i++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?> 
                    </div>  
                    <hr>     

                </article>    
                <article class="col-sm-4 home-right nopadding content-1">      
                    <?php if (!empty($worldarticles) && $worldarticles['mtv-news']) { ?>
                        <div class="trending-social-holder">        
                            <div class="trending-heading">          
                                <h3 class="sidebar-title text-center">Music Entertainment</h3>  
                            </div>                
                            <ul class="right-now">  

                                <?php foreach ($worldarticles['mtv-news'] as $key => $value) { ?>
                                    <li> 
                                        <a href="<?php echo $value['url']; ?>" target="_blank">
                                            <div class="live-feed-thumb"> 
                                                <img src="<?php echo $value['urlToImage']; ?>" alt="" class="live-feed-thumb-img" height="" width="60"> 
                                            </div>                             
                                            <div class="live-feed-txt">       
                                                <div class="live-feed-layout">  
                                                    <p class="live-feed-action">Music</p>  
                                                    <p class="live-feed-timesince"><span class="live-feed-humanized"><?php echo $value['publishedAt']; ?></span></p>    
                                                </div>                               
                                                <p class="live-feed-headline"><?php echo $value['title']; ?></p>  
                                            </div>                     
                                        </a> 
                                    </li> 
                                <?php } ?>  


                            </ul>    
                        </div>   
                    <?php } ?>
                    <?php if (!empty($worldarticles) && $worldarticles['national-geographic']) { ?>
                        <div class="trending-social-holder">         
                            <div class="trending-heading">           
                                <h3 class="sidebar-title">National Geographic</h3>    
                            </div>             
                            <ul> 
                                <?php $nationcount = 1; ?>
                                <?php foreach ($worldarticles['national-geographic'] as $key => $value) { ?>
                                    <?php if ($nationcount == 1) { ?>
                                        <li>
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" >
                                                <div class="live-feed-full-width-image-wrap"> 
                                                    <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                    <div class="live-feed-hed-wrap">
                                                        <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                        <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                    </div>                               
                                                </div>                          
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a>
                                        </li> 
                                    <?php } ?>
                                    <?php $nationcount++; ?>
                                <?php } ?>
                            </ul>              
                        </div>   
                    <?php } ?>
                    <div class="trending-social-holder">  
                        <div class="trending-heading">    
                            <h3 class="sidebar-title">Sports</h3>   
                        </div>               
                        <ul>                
                            <?php if (!empty($worldarticles) && $worldarticles['bbc-sport']) { ?>
                                <?php $nationcount = 1; ?>
                                <?php foreach ($worldarticles['bbc-sport'] as $key => $value) { ?>
                                    <?php if ($nationcount == 1) { ?>
                                        <li>
                                            <a href="<?php echo $value['url']; ?>" target="_blank">
                                                <div class="live-feed-full-width-image-wrap"> 
                                                    <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                    <div class="live-feed-hed-wrap">
                                                        <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                        <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                    </div>                               
                                                </div>                          
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a>
                                        </li> 
                                    <?php } ?>
                                    <?php $nationcount++; ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>           
                    </div> 
                    <?php
                    $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/matches/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2'); // change with your API key
                    $cricketMatches = json_decode($cricketMatchesTxt);
                    ?>

                    <?php /*if (!empty($cricketMatches->matches)) { ?>
                        <div class="trending-social-holder">        
                            <div class="trending-heading">          
                                <h3 class="sidebar-title text-center">Up Coming Matchs</h3>  
                            </div>                
                            <ul class="right-now">  

                                <?php foreach ($cricketMatches->matches as $item) { ?>
                                    <?php if ($item->matchStarted == false) { ?>
                                        <li> 
                                            <a href="#"><?php echo ($item->{'team-2'}); ?> VS <?php echo ($item->{'team-1'}); ?></a> 
                                        </li> 
                                    <?php } ?>
                                <?php } ?>  


                            </ul>    
                        </div>
                    <?php }*/ ?>

                    <?php if (!empty($worldarticles) && $worldarticles['buzzfeed']) { ?>           
                        <div class="trending-social-holder hide"> 
                            <div class="trending-heading">      
                                <h3 class="sidebar-title">Entertainment</h3> 
                            </div>                
                            <ul>                

                                <?php $nationcount = 1; ?>
                                <?php foreach ($worldarticles['buzzfeed'] as $key => $value) { ?>
                                    <?php if ($nationcount == 1) { ?>
                                        <li>
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" >
                                                <div class="live-feed-full-width-image-wrap"> 
                                                    <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                    <div class="live-feed-hed-wrap">
                                                        <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                        <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                    </div>                               
                                                </div>                          
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="#" onclick="get_new_details(<?php echo $value['news_id']; ?>,2)" data-toggle="modal" data-target="#product_view" ><?php echo $value['title']; ?></a>
                                        </li> 
                                    <?php } ?>
                                    <?php $nationcount++; ?>
                                <?php } ?>
                            </ul>             
                        </div>      
                    <?php } ?>    
                </article>     
                <div class="clearfix"></div>       
                <div class="clearfix"></div>  
            </section> 
        </div>      
    </div>     
    <?php if ($this->router->fetch_class() == 'mycon') { ?>
        <div class="front-overlay-arrows">
            <div class="front-arrow-wrapper">
                <?php if (!empty($prev)) { ?>
                    <a href="<?php echo base_url(); ?>mycon/<?php echo!empty($prev) ? $prev : ''; ?>" rel="prev" data-ht="frontprev" id="cards-prev-link" class="front-arrow-news" style="visibility: visible;">
                        <div class="cards-nav-icon"></div>
                        <div class="front-overlay-prev-arrows-anchor news-theme-bg">
                            <div class="front-prev-story-content-holder">
                                <p class="front-prev-arrow-label"><?php echo $prev; ?></p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <?php if (!empty($next)) { ?>
                    <a href="<?php echo base_url(); ?>mycon/<?php echo!empty($next) ? $next : ''; ?>" rel="next" data-ht="frontnext" id="cards-next-link" class="front-arrow-life" style="visibility: visible;">
                        <div class="cards-nav-icon"></div>
                        <div class="front-overlay-next-arrows-anchor life-theme-bg">
                            <div class="front-next-story-content-holder">
                                <p class="front-next-arrow-label"><?php echo $next; ?></p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>
</div>
<style>
    .table-responsive {
        background: transparent !important;
    }
</style>

<script>

    $('iframe#iframeId1').ready(function () {
        $('iframe#iframeId1').contents().find("head").append($("<style type='text/css'>  .inlineblock  a{ display:none;} .inlineblock{width:100%;} </style>"));
    });

</script>

<style>
    .front-overlay-arrows {
        height: 0;
        left: 0;
        position: fixed;
        top: 45%;
        width: 100%;
        z-index: 4;
    }
    .no-touch .front-overlay-arrows:hover {
        z-index: 101;
    }
    .high-impact-ad-visible .front-overlay-arrows {
        display: none;
    }
    @media only screen and (max-height: 395px) {
        .front-arrow-wrapper {
            display: none;
        }
    }
    @media (max-width: 979px) {
        .front-arrow-wrapper {
            display: none;
        }
    }
    @media (min-width: 980px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    @media (min-width: 1150px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    @media (min-width: 1250px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    #cards-next-link, #cards-prev-link {
        height: 55px;
        position: relative;
        transition: opacity 400ms ease-in-out 0s;
        visibility: hidden;
        width: 55px;
        z-index: 100;
    }
    #cards-prev-link {
        float: left;
    }
    #cards-next-link {
        float: right;
    }
    .cards-nav-icon::before {
        color: hsl(0, 0%, 30%);
        display: block;
        font-family: "Gannett Icons";
        font-size: 55px;
        height: 55px;
        line-height: 79px;
        position: relative;
        top: -11px;
        width: 29px;
    }
    #cards-prev-link .cards-nav-icon::before {
        content: "<";
    }
    #cards-next-link .cards-nav-icon::before {
        content: ">";
    }



    .front-overlay-next-arrows-anchor, .front-overlay-prev-arrows-anchor {
        background-color: hsl(0, 0%, 14%);
        height: 55px;

        position: absolute;
        top: 0;
        transition: left 0.1s ease-out 0s, right 0.1s ease-out 0s;
    }
    .front-overlay-next-arrows-anchor {
        padding: 0 20px 0 30px;
        right: -200px;
    }
    .front-overlay-prev-arrows-anchor {
        left: -200px;
        padding: 0 30px 0 20px;
    }
    #cards-prev-link:hover  .front-overlay-prev-arrows-anchor{left:0 !important;}
    #cards-next-link:hover  .front-overlay-next-arrows-anchor{right:0 !important;}
    .no-touch #cards-next-link:hover .front-overlay-next-arrows-anchor {
        right: 0;
    }
    .no-touch #cards-prev-link:hover .front-overlay-prev-arrows-anchor {
        left: 0;
    }
    .front-next-arrow-label, .front-prev-arrow-label {
        color: hsl(0, 0%, 100%);
        font: 13px/18px "Futura Today DemiBold",Arial,sans-serif;
        margin-top: 18px;
        text-align: center;
        text-shadow: 0 1px 0 hsla(0, 0%, 0%, 0.5);
        text-transform: uppercase;
        white-space: nowrap;
    }
    .front-next-arrow-label::after, .front-prev-arrow-label::before {
        display: inline-block;
        font-family: "Gannett Icons";
        font-size: 12px;
        font-weight: 700;
        position: relative;
        top: 1px;
    }
    .front-next-arrow-label::after {
        content: ">";
        margin-left: 6px;
    }
    .front-prev-arrow-label::before {
        content: "<";
        margin-right: 6px;
    }
    .front-prev-story-content-holder {
        transition: left 0.3s ease-in-out 0s;
    }
    .front-next-story-content-holder {
        transition: right 0.3s ease-in-out 0s;
    }
    .stag-masthead > h1 {
        color: hsl(0, 0%, 100%);
        font: 700 50px/54px "helvetica neue",arial,sans-serif;
        margin: 0 0 25px;
        text-shadow: 4px 3px 3px hsla(0, 0%, 0%, 0.4);
    }
    #topic-card.fixed {
        position: fixed;
        width: 100%;
    }
    #topic-card footer {
        position: relative;
    }
</style>
