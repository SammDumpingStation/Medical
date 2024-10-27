<main class="flex-1">
    <livewire:horizontal-nav />

    <div class="container">
        <h1 class="text-center mb-4 text-2xl font-bold">Check-up Records</h1>

        <form method="POST" action="" class="bg-white p-4 rounded-2xl shadow">
            <div class="mb-3">
                <label for="patient_name" class="form-label">Patient Name:</label> <!-- Changed to patient_name -->
                <input type="text" class="form-control" name="patient_name" required> <!-- Changed input type -->
            </div>

            <div class="mb-3">
                <label for="follow_up_date" class="form-label">Follow-Up Date:</label>
                <input type="date" class="form-control" name="follow_up_date" required>
            </div>

            <div class="mb-3">
                <label for="checkup_details" class="form-label">Check-Up Details:</label>
                <textarea class="form-control" name="checkup_details" required></textarea>
            </div>

            <div class="mb-3">
                <label for="recommendations" class="form-label">Recommendations:</label>
                <textarea class="form-control" name="recommendations" required></textarea>
            </div>

            <button type="submit" name="add_checkup" class="btn btn-primary text-white">Add Check-Up Record</button>
        </form>

        <h2 class="mt-5">Existing Check-Up Records</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th> <!-- Changed column heading -->
                        <th>Follow-Up Date</th>
                        <th>Check-Up Details</th>
                        <th>Recommendations</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($result > 0)
                        @while ($row = mysqli_fetch_assoc($result))
                            <tr>
                                <td><?php echo htmlspecialchars($row['id'] ?? 'Loram'); ?></td>
                                <td><?php echo htmlspecialchars($row['patient_name'] ?? 'Loram'); ?></td> <!-- Changed to name -->
                                <td><?php echo htmlspecialchars($row['follow_up_date'] ?? 'Loram'); ?></td>
                                <td><?php echo htmlspecialchars($row['checkup_details'] ?? 'Loram'); ?></td>
                                <td><?php echo htmlspecialchars($row['recommendations'] ?? 'Loram'); ?></td>
                            </tr>
                        @endwhile
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No records found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</main>
