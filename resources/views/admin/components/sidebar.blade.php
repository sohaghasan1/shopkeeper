<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('index')}}">
          <span class="align-middle">Store Keeper</span>
        	</a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('index')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('all')}}">
                         <i class="align-middle" data-feather="user"></i> <span class="align-middle">Products</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('add')}}">
                         <i class="align-middle" data-feather="user"></i> <span class="align-middle">Add Products</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('category')}}">
                         <i class="align-middle" data-feather="user"></i> <span class="align-middle">Category</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('order_list')}}">
                         <i class="align-middle" data-feather="user"></i> <span class="align-middle">Order List</span>
                        </a>
					</li>
				</ul>

			
			</div>
		</nav>