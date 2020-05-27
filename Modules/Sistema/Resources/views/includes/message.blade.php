<div class="alert alert-{{ $label ?? '' }} alert-dismissable hidden message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-check-circle"></i> {{ $title ?? '' }}</h4> <p>{{ $description ?? '' }}</p>
    <p class="hidden label-message">{{ $label ?? '' }}</p>
    <p class="hidden title-message">{{ $title ?? '' }}</p>
    <p class="hidden description-message">{{ $description ?? '' }}</p>
</div>