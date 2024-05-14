<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Color Palette */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #0056b3;
            --background-color: #f2f2f2;
            --accent-color: #4CAF50;
        }

        /* Basic Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        /* Form Styles */
        form {
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: var(--secondary-color);
        }

        /* Ticket Styles */
        .ticket {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        /* Icons */
        .icon {
            color: var(--accent-color);
            font-size: 24px;
            margin-right: 5px;
        }

        /* CSS3 Animation */
        @keyframes zoom {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .zoomIn {
            animation: zoom 0.5s;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fa fa-plane icon"></i>Ticket Booking</h1>
        <form id="bookingForm">
            <label for="name">Name:</label>
            <input type="text" id="name" required>

            <label for="Source">Source:</label>
            <select id="Source" required>
                <option value="Trikon buag">Trikon baug</option>
                <option value="Saurashtra univercity">Saurashtra univercity</option>
                <option value="Pradhyuman park">Pradhyuman park</option>
                <option value="Gsrtc bus port">Gsrtc bus port</option>
                <option value="Aaji dam">Aaji dam</option>
            </select>

            <label for="destination">Destination:</label>
            <select id="destination" required>
            <option value="Trikon buag">Trikon baug</option>
                <option value="Saurashtra univercity">Saurashtra univercity</option>
                <option value="Pradhyuman park">Pradhyuman park</option>
                <option value="Gsrtc bus port">Gsrtc bus port</option>
                <option value="Aaji dam">Aaji dam</option>
            </select>

            <label for="date">Date of Travel:</label>
            <input type="date" id="date" required>

            <button type="submit"><i class="fa fa-check icon"></i>Book Ticket</button>
        </form>

        <div class="ticket" id="ticket" style="display: none;">
            <h2><i class="fa fa-ticket icon"></i>Booking Details</h2>
            <p><i class="fa fa-user icon"></i><strong>Name:</strong> <span id="ticketName"></span></p>
            <p><i class="fa fa-globe icon"></i><strong>Destination:</strong> <span id="ticketDestination"></span></p>
            <p><i class="fa fa-calendar icon"></i><strong>Date of Travel:</strong> <span id="ticketDate"></span></p>
            <button onclick="printTicket()"><i class="fa fa-print icon"></i>Print Ticket</button>
        </div>
    </div>

    <script>
        document.getElementById("bookingForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const name = document.getElementById("name").value;
            const destination = document.getElementById("destination").value;
            const date = document.getElementById("date").value;

            document.getElementById("ticketName").textContent = name;
            document.getElementById("ticketDestination").textContent = destination;
            document.getElementById("ticketDate").textContent = date;

            document.getElementById("ticket").style.display = "block";
            document.getElementById("ticket").classList.add("zoomIn");
        });

        function printTicket() {
            const ticket = document.getElementById('ticket');
            const printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Ticket Details</title></head><body>');
            printWindow.document.write(ticket.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        }
    </script>
</body>
</html>

    <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright &copy; 2024-25 NIKI</strong>
All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
