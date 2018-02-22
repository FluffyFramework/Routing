	Request -> 
		Router: 
			RouteCollection $routes;
			Router->match(RequestContext $request) ->
				$request => 
					[ 
						'uri' => '/costam/blabla/balbla/',
						'method' => 'POST|GET',
						'query' => '?costam'
					]
				loop($route in $routes)
					if $route->uri == $request->uri
						return $route;