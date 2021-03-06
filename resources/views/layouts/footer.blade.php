 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Alga 2019</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('assets/backend/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{asset('assets/backend/js/sb-admin-2.min.js')}}"></script>

 <!-- Page level plugins -->
 <script src="{{asset('assets/backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('assets/backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('assets/backend/js/demo/datatables-demo.js')}}"></script>


 <script src="{{ asset('js/flatpicker.js') }}"></script>

 <script>
     flatpickr('#published_at', {
         enableTime: true,
         enableSeconds: true
     })

     $(document).ready(function () {
         $('.tags-selector').select2();
     });

 </script>
 <script>
     $(document).ready(function () {
         $('#example').DataTable();
     });

 </script>

 @yield('scripts')

 </body>

 </html>
