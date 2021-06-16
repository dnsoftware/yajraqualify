
$('#users-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: 'http://yajraqualify.local/datatable/basic-data',
    columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'first_name' },
        { data: 'last_name' },
        { data: 'email' },
        { data: 'created_at' },
        { data: 'updated_at' },
    ]
});

