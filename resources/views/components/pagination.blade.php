<div class="d-flex justify-content-end">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item {{ (request()->get('page') == 1 || is_null(request()->get('page'))) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ '?page='.(request()->get('page') - 1) }}" tabindex="-1">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{ is_null(request()->get('page')) ? '?page=2' : '?page='.(request()->get('page') + 1)  }}">Next</a>
            </li>
        </ul>
    </nav>
</div>