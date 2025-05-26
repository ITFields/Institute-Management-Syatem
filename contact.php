<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Support - Google Maps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .contact-info {
            font-size: 18px;
            margin: 20px 0;
            color: #555;
        }
        .map-container {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .phone {
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

    <div class="contact-container">
        <h2>Contact Support</h2>
        <p class="contact-info">
            📍 <strong>Address:</strong> SCO 394, Sector 37-D, Chandigarh 160036 <br>
            📞 <strong>Phone:</strong> <a href="tel:09814032140" class="phone">098140 32140</a>
        </p>
        
        <div class="map-container">
            <!-- Google Maps iframe -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.2052198180068!2d76.74493067426612!3d30.7407364852481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fedc134aca3d5%3A0x9953c2aebb904624!2sHARVARD%20COMPUTER!5e0!3m2!1sen!2sin!4v1743530190911!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>

</body>
</html>
