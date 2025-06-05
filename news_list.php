<?php
// Define the RSS feed URL (Example: TechCrunch RSS feed)
$rss_feed_url = 'https://techcrunch.com/feed/';

// Fetch the RSS feed data
$rss = simplexml_load_file($rss_feed_url);

// Check if RSS feed is loaded successfully
if ($rss !== false):
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest IT News</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS here -->
</head>
<body>
    <div class="container">
        <h2>Latest IT News</h2>
        
        <?php
        // Loop through each item in the RSS feed
        foreach ($rss->channel->item as $item):
        ?>
        <div class="news-item">
            <h3><a href="<?php echo $item->link; ?>" target="_blank"><?php echo htmlspecialchars($item->title); ?></a></h3>
            <p><strong>Published on: </strong><?php echo date("F j, Y", strtotime($item->pubDate)); ?></p>
            <p><?php echo htmlspecialchars($item->description); ?></p>
            <a href="<?php echo $item->link; ?>" target="_blank" class="read-more">Read More</a>
        </div>
        <hr>
        <?php endforeach; ?>

    </div>
</body>
</html>

<?php
else:
    echo "<p>Failed to fetch the latest news.</p>";
endif;
?>
