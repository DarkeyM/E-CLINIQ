import './bootstrap';

// Edit Form Pop-Up
$(document).ready(function() {
    $('#edit-item-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var dosage = button.data('dosage');
        var quantity = button.data('quantity');
        var modal = $(this);
        modal.find('.modal-title').text('Edit Item');
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #dosage').val(dosage);
        modal.find('.modal-body #quantity').val(quantity);
    });
});