<template>
	<Head title="Welcome" />

	<main class="-mt-24 pb-8">
		<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
			<h1 class="sr-only">Profile</h1>
			<!-- Main 3 column grid -->
			<div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
				<!-- Left column -->
				<div class="grid grid-cols-1 gap-4 lg:col-span-2">
					<!-- Welcome panel -->
					<section aria-labelledby="profile-overview-title">
						<div class="rounded-lg bg-white overflow-hidden shadow">
							<h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
							<div class="bg-white p-6">
								<div class="sm:flex sm:items-center sm:justify-between">
									<div class="sm:flex sm:space-x-5">
										<div class="flex-shrink-0">
											<img
												class="mx-auto h-20 w-20 rounded-full"
												src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
												alt=""
											/>
										</div>
										<div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
											<p class="text-sm font-medium text-gray-600">Welcome back,</p>
											<p class="text-xl font-bold text-gray-900 sm:text-2xl">
												{{ $page.props.auth ? $page.props.auth.user.username : "Guest" }}
											</p>
											<p class="text-sm font-medium text-gray-600">
												{{ $page.props.auth ? $page.props.auth.user.email : "Feel free to sign in!" }}
											</p>
										</div>
									</div>
									<div class="mt-5 flex justify-center sm:mt-0">
										<Link
											v-if="$page.props.auth"
											:href="route('account')"
											class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
										>
											Account
										</Link>
										<Link
											v-else
											:href="route('login')"
											class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
										>
											Sign in
										</Link>
									</div>
								</div>
							</div>
							<div
								v-if="$page.props.auth"
								class="border-t border-gray-200 bg-gray-50 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x"
							>
								<div class="px-6 py-5 text-sm font-medium text-center">
									<span class="text-gray-900">12</span>
									<span class="text-gray-600">Vacation days left</span>
								</div>

								<div class="px-6 py-5 text-sm font-medium text-center">
									<span class="text-gray-900">4</span>
									<span class="text-gray-600">Sick days left</span>
								</div>

								<div class="px-6 py-5 text-sm font-medium text-center">
									<span class="text-gray-900">2</span>
									<span class="text-gray-600">Personal days left</span>
								</div>
							</div>
						</div>
					</section>

					<!-- Actions panel -->
					<section aria-labelledby="quick-links-title">
						<div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
							<h2 class="sr-only" id="quick-links-title">Quick links</h2>

							<div
								class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500"
							>
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> -->
										<svg class="h-6 w-6" viewBox="0 -.11376601 49.74245785 51.31690859" xmlns="http://www.w3.org/2000/svg">
											<path
												d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
												fill="#ff2d20"
											/>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://laravel.com/" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											Laravel
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">The core of this framework is Laravel</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>

							<div class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<svg class="h-6 w-6" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<g id="Brand-Doodling" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<g
													id="symbol---original"
													transform="translate(18.405592, 17.405592) rotate(-45.000000) translate(-18.405592, -17.405592) translate(-6.094408, -1.094408)"
												>
													<g id="Group-96-Copy-4" transform="translate(15.000000, 0.000000)" fill="#4A4A4A" fill-rule="nonzero">
														<path
															d="M0.652771855,4.48401956 L7.61588486,4.48401956 C9.0501766,4.48401956 10.2128998,5.64674274 10.2128998,7.08103448 L10.2128998,7.08103448 C10.2128998,8.51532622 9.0501766,9.67804941 7.61588486,9.67804941 L0.652771855,9.67804941 C-0.781519883,9.67804941 -1.94424307,8.51532622 -1.94424307,7.08103448 L-1.94424307,7.08103448 C-1.94424307,5.64674274 -0.781519883,4.48401956 0.652771855,4.48401956 Z"
															id="Rectangle-Copy-73"
															transform="translate(4.134328, 7.081034) rotate(-270.000000) translate(-4.134328, -7.081034) "
														></path>
														<path
															d="M-3.32366493,23.3455138 L11.5923216,23.3455138 C13.0266134,23.3455138 14.1893366,24.508237 14.1893366,25.9425287 L14.1893366,25.9425287 C14.1893366,27.3768205 13.0266134,28.5395437 11.5923216,28.5395437 L-3.32366493,28.5395437 C-4.75795666,28.5395437 -5.92067985,27.3768205 -5.92067985,25.9425287 L-5.92067985,25.9425287 C-5.92067985,24.508237 -4.75795666,23.3455138 -3.32366493,23.3455138 Z"
															id="Rectangle-Copy-74"
															transform="translate(4.134328, 25.942529) rotate(-270.000000) translate(-4.134328, -25.942529) "
														></path>
														<path
															d="M2.10283241,8.32513323 L31.3798551,8.54792872 C32.8395401,8.5590368 34.0200893,9.73966424 34.0311007,11.19935 L34.0311007,11.19935 C34.0418988,12.6307735 32.8902544,13.7999251 31.4588309,13.8107232 C31.4457393,13.810822 31.4326472,13.8108215 31.4195556,13.8107219 L2.14253293,13.5879264 C0.682847917,13.5768183 -0.497701276,12.3961909 -0.508712595,10.9365051 L-0.508712595,10.9365051 C-0.519510713,9.50508166 0.632133688,8.33593005 2.06355717,8.32513193 C2.07664873,8.32503317 2.08974085,8.3250336 2.10283241,8.32513323 Z"
															id="Rectangle-Copy-77"
															transform="translate(16.761194, 11.067928) rotate(-330.000000) translate(-16.761194, -11.067928) "
														></path>
														<path
															d="M2.14253293,23.4329862 L31.4195556,23.2101907 C32.8509784,23.1992977 34.0202064,24.3508646 34.0310994,25.7822874 C34.031199,25.7953789 34.0311994,25.808471 34.0311007,25.8215626 L34.0311007,25.8215626 C34.0200893,27.2812484 32.8395401,28.4618758 31.3798551,28.4729839 L2.10283241,28.6957794 C0.671409647,28.7066724 -0.497818295,27.5551055 -0.508711293,26.1236827 C-0.508810919,26.1105911 -0.508811352,26.097499 -0.508712595,26.0844075 L-0.508712595,26.0844075 C-0.497701276,24.6247217 0.682847917,23.4440943 2.14253293,23.4329862 Z"
															id="Rectangle-Copy-78"
															transform="translate(16.761194, 25.952985) rotate(-30.000000) translate(-16.761194, -25.952985) "
														></path>
													</g>
													<path
														d="M11.8965885,15.8875205 L26.3720682,15.8875205 C27.8316779,15.8875205 29.0149254,17.070768 29.0149254,18.5303777 L29.0149254,18.5303777 C29.0149254,19.9899874 27.8316779,21.1732348 26.3720682,21.1732348 L11.8965885,21.1732348 C10.4369788,21.1732348 9.25373134,19.9899874 9.25373134,18.5303777 L9.25373134,18.5303777 C9.25373134,17.070768 10.4369788,15.8875205 11.8965885,15.8875205 Z"
														id="Rectangle-Copy-75"
														fill="#53B5FF"
														transform="translate(19.134328, 18.530378) rotate(-180.000000) translate(-19.134328, -18.530378) "
													></path>
													<path
														d="M2.64285714,15.8875205 L4.81982942,15.8875205 C6.27943912,15.8875205 7.46268657,17.070768 7.46268657,18.5303777 L7.46268657,18.5303777 C7.46268657,19.9899874 6.27943912,21.1732348 4.81982942,21.1732348 L2.64285714,21.1732348 C1.18324745,21.1732348 1.03651537e-13,19.9899874 1.03472786e-13,18.5303777 L1.03472786e-13,18.5303777 C1.03294035e-13,17.070768 1.18324745,15.8875205 2.64285714,15.8875205 Z"
														id="Rectangle-Copy-76"
														fill="#53B5FF"
														transform="translate(3.731343, 18.530378) rotate(-180.000000) translate(-3.731343, -18.530378) "
													></path>
												</g>
											</g>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://laracasts.com/browse/all" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											Laracasts
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">
										The Laravel documentation is a great way to start, but if you do prefer video tutorials then there is no better place than Laracasts
									</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>

							<div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<svg class="block fill-current text-black h-4" viewBox="0 0 275.3 50.5">
											<path d="M231.2 16.1h-17.8l17.2 17.2-17.2 17.2h17.8l17.2-17.2z"></path>
											<path d="M258.1 16.1h-17.8l17.2 17.2-17.2 17.2h17.8l17.2-17.2z"></path>
											<path
												d="M6 15.3h10.3l-6 34.2H0l6-34.2zm.6-9.1C7.2 2.9 10.3 0 13.7 0s5.7 2.8 5.2 6.2c-.5 3.4-3.7 6.2-7.2 6.2s-5.6-3-5.1-6.2zM54.3 28.5l-3.7 21H40.4L43.8 30c.8-4.4-1.6-6.2-4.9-6.2-3.4 0-6.5 2-7.5 6.6L28 49.5H17.8l6-34.2h10.3l-.5 3.2c2.3-2.6 6.2-4.2 10.1-4.2 6.9.1 12.2 5.1 10.6 14.2zM94.5 32.4c-.1.8-.5 2.7-1.1 4.1H68.9c.6 3.8 3.8 4.8 7 4.8 2.9 0 5.2-.8 7.2-2.7l7.2 5.9c-4 4-8.7 6-15 6-11.8 0-18-8.5-16.3-18.7a20.7 20.7 0 0 1 20.5-17.4c9.8 0 16.9 7.6 15 18zm-9.7-3.7c-.3-3.8-3-5.3-6.2-5.3a8.9 8.9 0 0 0-8.3 5.3h14.5zM123.9 14.6l-2 11.6c-4-.6-10.5.8-11.7 7.8l.1-.4-2.8 15.9H97.3l6-34.2h10.3l-1.1 6.2c2.1-4.7 6.6-6.9 11.4-6.9zM137.8 37.3c-.5 3.1 2 3.3 6.6 2.9l-1.6 9.3c-12.3 1.4-16.9-2.7-15.2-12.2l2.1-12.1h-5.5l1.8-9.9h5.4l1.2-6.5 10.8-3.1-1.7 9.6h7.1l-1.8 9.9h-7l-2.2 12.1zM155.3 15.3h10.3l-6 34.2h-10.3l6-34.2zm.6-9.1c.5-3.3 3.7-6.2 7.1-6.2s5.7 2.8 5.2 6.2c-.5 3.4-3.7 6.2-7.2 6.2s-5.7-3-5.1-6.2zM208.1 15.3l-6 34.2h-10.3l.4-2.3a15.5 15.5 0 0 1-10.3 3.3c-11.1 0-15.3-9.6-13.5-18.9 1.6-8.8 8.6-17.2 19.2-17.2 4.5 0 7.7 1.8 9.6 4.6l.6-3.6h10.3zm-13.2 17.2c.9-5.2-1.9-8.4-6.6-8.4a9.5 9.5 0 0 0-9.5 8.3c-.9 5.1 1.8 8.3 6.6 8.3 4.6.1 8.6-3.1 9.5-8.2z"
											></path>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://inertiajs.com/" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											Inertia JS
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">
										Inertia is a piece of software that glues itself between Laravel and Vue and makes it way easier to make a Single Page Application (SPA) The
										best way to get a idea is watching a Laracast series about it.
									</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>

							<div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<svg
											class="h-6 w-6"
											viewBox="0 0 256 221"
											version="1.1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink"
											preserveAspectRatio="xMidYMid"
										>
											<g>
												<path d="M204.8,0 L256,0 L128,220.8 L0,0 L50.56,0 L97.92,0 L128,51.2 L157.44,0 L204.8,0 Z" fill="#41B883"></path>
												<path d="M0,0 L128,220.8 L256,0 L204.8,0 L128,132.48 L50.56,0 L0,0 Z" fill="#41B883"></path>
												<path d="M50.56,0 L128,133.12 L204.8,0 L157.44,0 L128,51.2 L97.92,0 L50.56,0 Z" fill="#35495E"></path>
											</g>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://vuejs.org/" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											Vue
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">Vue.JS is one of many Javascript frameworks, it combines beatifully with InertiaJS and Laravel.</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>

							<div class="sm:rounded-bl-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<svg class="h-6 w-6" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 153.6">
											<linearGradient id="a" x1="-2.778%" y1="32%" y2="67.556%">
												<stop offset="0" stop-color="#2298bd" />
												<stop offset="1" stop-color="#0ed7b5" />
											</linearGradient>
											<path
												d="M128 0C93.867 0 72.533 17.067 64 51.2 76.8 34.133 91.733 27.733 108.8 32c9.737 2.434 16.697 9.499 24.401 17.318C145.751 62.057 160.275 76.8 192 76.8c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C174.249 14.743 159.725 0 128 0zM64 76.8C29.867 76.8 8.533 93.867 0 128c12.8-17.067 27.733-23.467 44.8-19.2 9.737 2.434 16.697 9.499 24.401 17.318C81.751 138.857 96.275 153.6 128 153.6c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C110.249 91.543 95.725 76.8 64 76.8z"
												fill="url(#a)"
											/>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://tailwindcss.com/" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											TailwindCSS
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">
										A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design,
										directly in your markup.
									</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>

							<div
								class="rounded-bl-lg rounded-br-lg sm:rounded-bl-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500"
							>
								<div>
									<span class="rounded-lg inline-flex p-3 ring-4 ring-white">
										<svg class="h-6 w-6" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 153.6">
											<linearGradient id="a" x1="-2.778%" y1="32%" y2="67.556%">
												<stop offset="0" stop-color="#2298bd" />
												<stop offset="1" stop-color="#0ed7b5" />
											</linearGradient>
											<path
												d="M128 0C93.867 0 72.533 17.067 64 51.2 76.8 34.133 91.733 27.733 108.8 32c9.737 2.434 16.697 9.499 24.401 17.318C145.751 62.057 160.275 76.8 192 76.8c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C174.249 14.743 159.725 0 128 0zM64 76.8C29.867 76.8 8.533 93.867 0 128c12.8-17.067 27.733-23.467 44.8-19.2 9.737 2.434 16.697 9.499 24.401 17.318C81.751 138.857 96.275 153.6 128 153.6c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C110.249 91.543 95.725 76.8 64 76.8z"
												fill="url(#a)"
											/>
										</svg>
									</span>
								</div>
								<div class="mt-8">
									<h3 class="text-lg font-medium">
										<a href="https://tailwindui.com/" target="_blank" class="focus:outline-none">
											<!-- Extend touch target to entire panel -->
											<span class="absolute inset-0" aria-hidden="true"></span>
											TailwindUI
										</a>
									</h3>
									<p class="mt-2 text-sm text-gray-500">
										Over 500+ professionally designed, fully responsive, expertly crafted component examples you can drop into your Tailwind projects and
										customize to your heart’s content. Get started by checking out our free preview components, or browsing all of the examples in the
										categories you're most curious about.
									</p>
								</div>
								<span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
										/>
									</svg>
								</span>
							</div>
						</div>
					</section>

					<section aria-labelledby="quick-links-title">
						<div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0">
							<h2 class="sr-only" id="quick-links-title">Quick links</h2>

							<!-- This example requires Tailwind CSS v2.0+ -->
							<div class="relative bg-white py-16 sm:py-24 lg:py-32">
								<div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
									<h2 class="text-base font-semibold uppercase tracking-wider text-sky-800">What else do we use?</h2>
									<div class="mt-12">
										<div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
											<!-- New Tool -->
											<div class="pt-6 relative">
												<div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
													<div class="-mt-6">
														<h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">ZiggyJS</h3>
														<a href="https://github.com/tighten/ziggy" target="_blank" class="focus:outline-none">
															<!-- Extend touch target to entire panel -->
															<span class="absolute inset-0" aria-hidden="true"></span>
														</a>
														<p class="mt-5 text-base text-gray-500">Use your Laravel routes in JavaScript</p>
													</div>
												</div>
											</div>
											<!-- End Tool -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<!-- Right column -->
				<div class="grid grid-cols-1 gap-4">
					<!-- Announcements -->
					<section aria-labelledby="announcements-title">
						<div class="rounded-lg bg-white overflow-hidden shadow">
							<div class="p-6">
								<h2 class="text-base font-medium text-gray-900" id="announcements-title">What do we already provide</h2>
								<div class="flow-root mt-6">
									<ul role="list" class="-my-5 divide-y divide-gray-200">
										<li class="py-5">
											<div class="relative">
												<h3 class="text-sm font-semibold text-gray-800">Authentication</h3>
												<p class="mt-1 text-sm text-gray-600 line-clamp-2">
													A fully working Authentication with
													<Link class="underline text-blue-500" :href="route('login')">Login</Link>,
													<Link class="underline text-blue-500" :href="route('register')">Register</Link>
													pages/methods
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>

					<!-- Recent Hires -->
					<section aria-labelledby="recent-hires-title">
						<div class="rounded-lg bg-white overflow-hidden shadow">
							<div class="p-6">
								<h2 class="text-base font-medium text-gray-900" id="recent-hires-title">Recent Users</h2>
								<div class="flow-root mt-6">
									<ul v-if="users.length >= 1" role="list" class="-my-5 divide-y divide-gray-200">
										<li class="py-4" v-for="(user, index) in users" :key="index">
											<div class="flex items-center space-x-4">
												<div class="flex-shrink-0">
													<img
														class="h-8 w-8 rounded-full"
														src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
														alt=""
													/>
												</div>
												<div class="flex-1 min-w-0">
													<p class="text-sm font-medium text-gray-900 truncate">
														{{ user.username }}
													</p>
													<!-- <p class="text-sm text-gray-500 truncate">{{ user.email }}</p> -->
												</div>
												<div>
													<span
														v-show="user.admin"
														href="#"
														class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-cyan-400 text-sm leading-5 font-medium rounded-full text-white bg-cyan-500"
													>
														Admin
													</span>
												</div>
											</div>
										</li>
									</ul>

									<div class="py-4" v-else>
										<div class="flex items-center space-x-4">
											<div class="flex-1 min-w-0">
												<p class="text-sm font-medium text-gray-900 truncate">No users have been created yet...</p>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-6">
									<a
										href="#"
										class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
									>
										View all
									</a>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</main>
</template>

<script></script>

<script setup>
const props = defineProps({
	users: Array
})
</script>
