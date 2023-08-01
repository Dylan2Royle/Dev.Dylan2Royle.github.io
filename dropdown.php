<div class="dropdown">
    <button class="dropdown-btn"><i class="fas fa-angle-double-down"></i></button>
    <div class="dropdown-content">
        <a href="#" class="social-button"><i class="fab fa-tiktok"></i> Tik Tok </a>
        <a href="#" class="social-button"><i class="fab fa-facebook"></i> Facebook </a>
        <a href="#" class="social-button"><i class="fab fa"></i> Threads </a>
        <!-- Add more social media icons here -->
    </div>
</div>

<style>
        /* Add the provided CSS styles for the dropdown menu here */
        /* Style for the dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown button */
        .dropdown-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            background-color: #333;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
        }
        
        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            z-index: 1;
            right: 0; /* Add this line to position the dropdown to the right */
        }


        /* Show the dropdown content when the button is clicked */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style for the social media icons inside the dropdown */
        .dropdown-content a {
            display: block;
            padding: 8px 16px;
            text-decoration: none;
            color: #000;
            background-color: #fff;
        }

        /* Change the background color of social media icons on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown-content a i {
             margin-right: 15px; /* Adjust the value as needed */
        }

        

    </style>