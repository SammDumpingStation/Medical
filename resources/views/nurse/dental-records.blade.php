<?php
$sidebar_dental_records = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/medicalrecs.css') }}">
    <style>
        /* Add any custom styles here */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/Nbsc_logo-removebg-preview.png') }}" alt="NBSC HOS" width="50"
                height="50">
            NBSC HOS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Panel</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        <li><a class="dropdown-item" href="welcome2.php">Home</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 sidebar">
                <h5>Patient List</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search patient" aria-label="Search patient">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
                <ul class="list-group">
                    @if ($sidebar_dental_records)
                        @foreach ($sidebar_dental_records as $dental_record)
                            <li class="list-group-item <?php echo $dental_id == $dental_record['dental_id'] ? 'active' : ''; ?>">
                                <a href="?dental_id=<?php echo $dental_record['dental_id']; ?>">
                                    <?php echo htmlspecialchars($dental_record['dental_name'] ?? 'Loram'); ?>
                                </a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </nav>
            <main class="col-md-9 content">
                <div class="profile-header">
                    <img src="{{ asset('images/Nbsc_logo-removebg-preview.png') }}" alt="Profile Logo">
                    <h5>
                        Republic of the Philippines
                        <br />
                        Province of Bukidnon
                        <br />
                        NORTHERN BUKIDNON STATE COLLEGE
                        <br />
                        Municipality of Manolo Fortich
                        <br />
                        DENTAL PROFILE
                    </h5>
                </div>
                <div class="profile">
                    <h4>Dental Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>Name: <span><?php echo htmlspecialchars($dental_name ?? 'Loram'); ?></span></div>
                            <div>Type: <span><?php echo htmlspecialchars($dental_type ?? 'Loram'); ?></span></div>
                            <div>Date: <span><?php echo htmlspecialchars($dental_date ?? 'Loram'); ?></span></div>
                            <div>Address: <span><?php echo htmlspecialchars($dental_address ?? 'Loram'); ?></span></div>
                            <div>Telephone No: <span><?php echo htmlspecialchars($dental_tel_no ?? 'Loram'); ?></span></div>
                        </div>
                        <div class="col-md-6">
                            <div>Course Taken Year: <span><?php echo htmlspecialchars($dental_course_taken_year ?? 'Loram'); ?></span></div>
                            <div>Date of Birth: <span><?php echo htmlspecialchars($dental_date_of_birth ?? 'Loram'); ?></span></div>
                            <div>Civil Status: <span><?php echo htmlspecialchars($dental_civil_status ?? 'Loram'); ?></span></div>
                            <div>Allergies: <span><?php echo htmlspecialchars($dental_allergy_medication_food ?? 'Loram'); ?></span></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
