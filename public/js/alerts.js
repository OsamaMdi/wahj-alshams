document.addEventListener('DOMContentLoaded', function () {
    const message = document.body.dataset.message;
    const status = document.body.dataset.status;

    if (message && status) {
        Swal.fire({
            icon: status, // success OR error
            title: message,
            timer: 3000,
            showConfirmButton: false,
            toast: true,
            position: 'top-end'
        });
    }
});
