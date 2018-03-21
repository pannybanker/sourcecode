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
<?php } ?>
<style>
    .gameBox{max-width:100%}
</style>
<?php
$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/matches/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2'); // change with your API key
$cricketMatches = json_decode($cricketMatchesTxt);
?>
<script>
    function showTeams(unique_id) {
        $('.showtiming').load('<?php echo base_url(); ?>mycon/getlivescrore/' + unique_id)
    }
</script>

<div class="container">    
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-2 world-bg"> 
        </section>
    </div>
</div>
<div class="container">    
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-2 world-bg">         
            <article class="row no-gutters">   
                <?php if (!empty($cricketMatches->matches)) { ?>
                    <div class="col-xs-12 select-team">      
                        <div id="dd" class="wrapper-dropdown-2 life-bg white-color" tabindex="1">Team
                            <ul class="dropdown life-bg">   
                                <?php foreach ($cricketMatches->matches as $item) { ?>
                                    <?php if ($item->matchStarted == true) { ?>
                                        <li><a href="javascript:void(0)" onClick="showTeams(<?php echo $item->unique_id; ?>)" class="white-color"><?php echo ($item->{'team-2'}); ?></a></li>  
                                        <li><a href="javascript:void(0)" onClick="showTeams(<?php echo $item->unique_id; ?>)" class="white-color"><?php echo ($item->{'team-1'}); ?></a></li>  
                                    <?php } ?>
                                <?php } ?>

                            </ul>                   
                        </div>         
                    </div> 
                <?php } ?>
                <div class="col-xs-12">         
                    <div class="league scores">  
                        <div class="gameBox showtiming">    


                        </div>                   
                    </div>              
                </div>          
            </article>      
        </section>     


        <section class="col-xs-12 col-sm-12 col-md-10 white-bg"> 
            <?php if (!empty($worldarticles) && $worldarticles[$channel]) { ?> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <article class="row inner-page-bannerHolder no-gutters">   
                        <?php $i = 1; ?>

                        <?php foreach ($worldarticles[$channel] as $key => $value) { ?>
                            <?php if ($i == 1) { ?>
                                <div class="col-sm-8 no-padding">                 
                                    <div class="inner-banner"> 
                                        <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">   
                                        <div class="banner-ticket life-bg">News</div>              
                                        <div class="featured_posts_content">                   
                                            <a href="#"><h3><?php echo $value['title']; ?></h3></a>   
                                            <ul class="post_meta nav nav-pills">
                                                <li><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['publishedAt']; ?></a></li>
                                                <li><a href="<?php echo $value['url']; ?>" target="_blank"><i class="fa fa-thumbs-o-up"></i> Read Story</a></li>     
                                            </ul>                       
                                        </div>                  
                                    </div>               
                                </div>             
                                <div class="col-sm-4 no-padding">    
                                    <div class="banner-top-story white-color">    
                                        <h4>Top Stories</h4>                 
                                        <ul>   
                                        <?php } else { ?>
                                            <li><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a></li> 
                                        <?php } ?>
                                        <?php if ($i == 10 || count($worldarticles[$channel]) == $i) { ?>
                                        </ul>                   
                                    </div>               
                                </div>
                                <?php break; ?>
                            <?php } ?>
                            <?php $i++; ?>
                        <?php } ?>
                    </article> 
                </div>
            <?php } ?>
            <div class="col-xs-12 col-sm-12 col-md-8 no-padding">
                <?php if (!empty($worldarticles) && $worldarticles[$channel2]) { ?>      
                    <article class="inner-video-sliderHolder">  
                        <div class="inner-video-slider owl-carousel">  
                            <div class="item">  
                                <?php $i = 1; ?>
                                <?php foreach ($worldarticles[$channel2] as $key => $value) { ?>

                                    <?php if (!empty($value['urlToImage'])) { ?>

                                        <?php if ($i == 1) { ?>
                                            <div class="col-sm-6 video-img no-padding"> 
                                                <h3 class="headlinetitle"><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></h3>
                                                <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive"> 
                                                <span class="video-icon"><a href="<?php echo $value['url']; ?>" target="_blank"><i class="fa fa-play"></i></a></span> 
                                               
                                            </div>    
                                        <?php } ?>
                                        <?php if ($i == 2 || $i == count($worldarticles[$channel2])) { ?>
                                            <?php $i = 0; ?>
                                            <div class="col-sm-6 video-img no-padding"> 
                                                <h3 class="headlinetitle"><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></h3>
                                                <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive"> 
                                                <span class="video-icon"><a href="<?php echo $value['url']; ?>" target="_blank"><i class="fa fa-play"></i></a></span> 
                                               
                                            </div>  
                                        </div>
                                        <div class="item">  
                                        <?php } ?>
                                        <?php $i++; ?>

                                    <?php } ?>
                                <?php } ?>                    
                            </div>          
                        </div>          
                    </article>  
                <?php } ?>                     
                <article class="headline-container">    
                    <div class="col-xs-6">              
                        <h4>Headlines</h4>              
                    </div>               
                    <div class="col-xs-6 text-right">       
                        <div class="well well-sm">          
                            <div class="btn-group">
                                <a href="#" id="list" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-th-list"> </span>List</a>
                                <a href="#" id="grid" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-th"></span>Grid
                                </a> 
                            </div>       
                        </div>       
                    </div> 
                    <?php if (!empty($worldarticles) && $worldarticles[$headline]) { ?> 
                        <?php $j = 1; ?>

                        <div class="col-xs-12">  
                            <div id="products" class="row list-group">  
                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <?php foreach ($worldarticles[$headline] as $key => $value) { ?>
                                        <div class="item col-sm-6 col-md-4">          
                                            <div class="thumbnail"> 
                                                <img class="group list-group-image" src="<?php echo $value['urlToImage']; ?>" alt="" />  
                                                <div class="caption">                              
                                                    <ul class="hgpm-meta">                       
                                                        <li><span class="js-asset-section world-bg white-color">WORLD</span></li>     
                                                        <li><span class="js-asset-timestamp"><?php echo $value['publishedAt']; ?></span></li>    
                                                    </ul>                                  
                                                    <h4 class="list-group-item-heading2"><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a></h4>   
                                                    <!--<p class="list-group-item-text"><?php echo $value['description']; ?></p>  -->
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
                                </div>           
                            </div>              
                        <?php } ?>   
                        <div class="clearfix"></div>       
                </article>        
                <article class="col-xs-12">     
                    <?php if (!empty($worldarticles) && $worldarticles['espn']) { ?>
                        <div id="slider" class="flexslider">   
                            <ul class="slides"> 
                                <?php foreach ($worldarticles['espn'] as $key => $value) { ?>
                                <li> <a href="<?php echo $value['url']; ?>" target="_blank"><img src="<?php echo $value['urlToImage']; ?>"/></a> </li> 
                                <?php } ?>   
                            </ul>                
                        </div>  
                    <?php } ?>

                    <hr>          
                </article>        
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 no-padding">
                <section class="col-xs-12 col-sm-12 col-md-12 no-padding">     
                    <article class="home-right nopadding content-1"> 
                        <?php
                        $cricketMatchesTxtC = file_get_contents('http://cricapi.com/api/cricket/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2'); // change with your API key
                        $cricketMatchesC = json_decode($cricketMatchesTxtC);
                        ?>
                        <?php if ($this->router->class === 'mycon' && $this->router->method === 'sports') { ?>
                            <?php if (!empty($cricketMatchesC->data)) { ?>
                                <div class="trending-social-holder">        
                                    <div class="trending-heading">          
                                        <h3 class="sidebar-title text-center">Match Score</h3>  
                                    </div>                
                                    <ul class="right-now">  

                                        <?php foreach ($cricketMatchesC->data as $item) { ?>
                                            <li> 
                                                <a href="#"><?php echo($item->title); ?></a> 
                                            </li> 
                                        <?php } ?>  


                                    </ul>    
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if ($this->router->class === 'mycon' && $this->router->method === 'sports') { ?>
                            <?php if (!empty($cricketMatches->matches)) { ?>
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
                            <?php } ?>
                        <?php } ?>

                        <?php if (!empty($worldarticles) && $worldarticles[$music]) { ?>
                            <div class="trending-social-holder">        
                                <div class="trending-heading">          
                                    <h3 class="sidebar-title text-center">Music Entertainment</h3>  
                                </div>                
                                <ul class="right-now">  

                                    <?php foreach ($worldarticles[$music] as $key => $value) { ?>
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
                        <?php if (!empty($worldarticles) && $worldarticles[$geographics]) { ?>
                            <div class="trending-social-holder">         
                                <div class="trending-heading">           
                                    <h3 class="sidebar-title">National Geographic</h3>    
                                </div>             
                                <ul> 
                                    <?php $nationcount = 1; ?>
                                    <?php foreach ($worldarticles[$geographics] as $key => $value) { ?>
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
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
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
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
                                            </li> 
                                        <?php } ?>
                                        <?php $nationcount++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </ul>           
                        </div> 
                        <?php if (!empty($worldarticles) && $worldarticles[$entertaiment]) { ?>           
                            <div class="trending-social-holder"> 
                                <div class="trending-heading">      
                                    <h3 class="sidebar-title">Entertainment</h3> 
                                </div>                
                                <ul>                

                                    <?php $nationcount = 1; ?>
                                    <?php foreach ($worldarticles[$entertaiment] as $key => $value) { ?>
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
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
                                            </li> 
                                        <?php } ?>
                                        <?php $nationcount++; ?>
                                    <?php } ?>
                                </ul>             
                            </div>      
                        <?php } ?>

                    </article> 
                </section> 
            </div>   
        </section>    




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
