
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div class="toast show align-items-center text-bg-@yield('color') border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        <h5 style="color: white">@yield('mensaje')</h5>
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
