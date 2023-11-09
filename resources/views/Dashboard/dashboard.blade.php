@extends('Layouts.app')

@section('content')
				@livewireStyles
				<!--[if lt IE 8]>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
				<![endif]-->

				<!--=========================*
													Page Container
				*===========================-->
				<div class="page-container">

								<!--=========================*
																	Side Bar Menu
								*===========================-->

								@include('Layouts.sidebar')

								<!--=========================*
															End Side Bar Menu
								*===========================-->

							
											
												<livewire:dashboard />
												
								</div>
								<!--=================================*
															End Main Content Section
								*===================================-->

								<!--=================================*
																						Footer Section
								*===================================-->
								@include('Layouts.footer')
								<!--=================================*
																				End Footer Section
								*===================================-->

				</div>
				<!--=========================*
												End Page Container
				*===========================-->

				<!--=========================*
										Offset Sidebar Menu
				*===========================-->
			
				<!--================================*
													End Offset Sidebar Menu
				*==================================-->
				@livewireScripts
@endsection
