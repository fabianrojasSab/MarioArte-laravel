  @yield('modal')
  <!-- Modal -->
  <div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            @yield('modal_titulo') <!-- Titulo del Modal -->
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @yield('modal_cuerpo') <!-- Cuerpo del Modal -->
        </div>
        <div class="modal-footer" id="footer">
          @yield('modal_pie')<!-- Pie del Modal -->
        </div>
      </div>
    </div>
  </div>


