<?php
// Get the 'id' from the URL query string
$id = isset($_GET['id']) ? $_GET['id'] : '';  // Default to an empty string if not set
$extension = isset($_GET['e']) ? $_GET['e'] : '.ts';  // Default to '.ts' if not set

// Number of segments to generate
$num_segments = 7;  
$segment_duration = 3.0000;  // Segment duration in seconds

// Output the M3U playlist header
echo "#EXTM3U\n";
echo "#EXT-X-VERSION:3\n";
echo "#EXT-X-TARGETDURATION:3\n";
echo "#EXT-X-MEDIA-SEQUENCE:1\n";

// Generate the segments using the provided 'id'
for ($i = 0; $i < $num_segments; $i++) {
    // Create the segment URL by replacing [id] with the current value
    $segment_url = "http://xtv.ooo:8080/live/15155419/16175512/{$id}$extension";
    
    // Output the segment information
    echo "#EXTINF:$segment_duration,\n";
    echo "$segment_url\n";
}
?>
