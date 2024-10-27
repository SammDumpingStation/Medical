<main class="flex-1">
    <livewire:horizontal-nav />

    <div class="container">
        <h2>Medicine Record</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Frequency</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($medicineRecords === [])
                    <tr>
                        <td colspan="6" class="text-center">No records found</td>
                    </tr>
                @else
                    @foreach ($medicineRecords as $record)
                        <tr>
                            <td>{{ $record->medicineId }}</td>
                            <td><?php echo htmlspecialchars($record['medicine_name']); ?></td>
                            <td><?php echo htmlspecialchars($record['dosage']); ?></td>
                            <td><?php echo htmlspecialchars($record['frequency']); ?></td>
                            <td><?php echo htmlspecialchars($record['start_date']); ?></td>
                            <td><?php echo htmlspecialchars($record['end_date']); ?></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</main>
