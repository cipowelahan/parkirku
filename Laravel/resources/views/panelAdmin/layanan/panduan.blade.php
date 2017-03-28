@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar',['active'=>$active])
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar',['titleTop'=>$titleTop])
@endsection

@section('layanan')

<div class="row">
  <div class="col-xs-12 page-content">

  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary label-lg">
  				<b>Pengenalan Content</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-success label-sm">#*</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Markir</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" class="green">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-danger label-sm"><b>#1</b></span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
							<span class="grey">Kendaraan Masuk</span>
  						</h5>
  						<span class="widget-toolbar no-border">
							<a href="#" class="red">
								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
							</a>
  						</span>
  					</div>
  				</div>
  			
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-warning label-sm">#2</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Daftar Kendaraan</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" style="color: #f89406;">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-info label-sm">#3</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Lapor</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" class="blue">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary arrowed-in-right label-lg">
  				<b>Introduce</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller"><b>Title</b></h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" data-action="collapse">
  								<i class="ace-icon fa fa-check blue"></i>
  							</a>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main">
  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  </div>
</div>
@endsection