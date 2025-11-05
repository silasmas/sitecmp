<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mur de Stories — Démo Zuck.js</title>

  <!-- Zuck.js CSS + thème -->
  <link rel="stylesheet" href="https://unpkg.com/zuck.js/dist/zuck.css" />
  <link rel="stylesheet" href="https://unpkg.com/zuck.js/dist/skins/snapgram.css" />

  <style>
    body { margin:0; font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans"; background:#0b0b0c; color:#fff; }
    header { padding:16px; border-bottom:1px solid #222; display:flex; align-items:center; gap:12px; }
    header img.logo { width:36px; height:36px; border-radius:10px; }
    header .title { font-weight:700; font-size:18px; letter-spacing:.2px; }
    main { max-width: 900px; margin: 18px auto; padding: 0 12px 40px; }
    .hint { color:#aaa; font-size:14px; margin:10px 0 18px; }
    .zuck-container { background:#0f0f10; border:1px solid #1b1b1d; border-radius:14px; padding:10px; }
    video, .story-viewer video { object-fit: cover; }
  </style>
</head>
<body>
  <header>
    <img class="logo" src="https://dummyimage.com/72x72/2a2a2f/ffffff&text=TG" alt="Logo">
    <div class="title">Mur de Stories — Démo</div>
  </header>

  <main>
    <p class="hint">Swipe gauche/droite pour naviguer, appuie pour passer à la story suivante. Long press = pause.</p>

    <div class="zuck-container">
      <div id="stories"></div>
    </div>
  </main>

  <!-- (Optionnel) Gestes tactiles -->
  <script src="https://unpkg.com/hammerjs@2.0.8/hammer.min.js"></script>

  <!-- Zuck.js -->
  <script src="https://unpkg.com/zuck.js/dist/zuck.min.js"></script>

  <!-- Expose les données serveur AVANT l’init -->
  <!-- @isset($stories) -->
  <script>
    window._LARAVEL_STORIES_ = @json($stories);
  </script>
  <!-- @endisset -->

  <script>
	var stories;

    // --- Données de démo si le contrôleur n’en fournit pas ---
    const demoStories = [
      {
        id: "silas",
        photo: "https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=200&auto=format",
        name: "Silas",
        link: "#",
        lastUpdated: Math.floor(Date.now()/1000),
        items: [
          {
            id: "silas-1",
            type: "photo",
            length: 5,
            src: "https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1200&auto=format",
            preview: "https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 3600
          },
          {
            id: "silas-2",
            type: "video",
            length: 12,
            src: "https://filesamples.com/samples/video/mp4/sample_640x360.mp4",
            preview: "https://images.unsplash.com/photo-1512295767273-ac109ac3acfa?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 3500
          },
          {
            id: "silas-3",
            type: "photo",
            length: 6,
            src: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1200&auto=format",
            preview: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 3400
          }
        ]
      },
      {
        id: "naomi",
        photo: "https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=200&auto=format",
        name: "Naomi",
        link: "#",
        lastUpdated: Math.floor(Date.now()/1000) - 7200,
        items: [
          {
            id: "naomi-1",
            type: "photo",
            length: 5,
            src: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1200&auto=format",
            preview: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 8000
          },
          {
            id: "naomi-2",
            type: "video",
            length: 10,
            src: "https://filesamples.com/samples/video/mp4/sample_960x400_ocean_with_audio.mp4",
            preview: "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 7800
          }
        ]
      },
      {
        id: "eglise",
        photo: "https://images.unsplash.com/photo-1544776193-352d25ca82cd?q=80&w=200&auto=format",
        name: "Église B21",
        link: "#",
        lastUpdated: Math.floor(Date.now()/1000) - 20000,
        items: [
          {
            id: "eglise-1",
            type: "photo",
            length: 4,
            src: "https://images.unsplash.com/photo-1533000554311-3a027c0c0f88?q=80&w=1200&auto=format",
            preview: "https://images.unsplash.com/photo-1533000554311-3a027c0c0f88?q=80&w=300&auto=format",
            seen: true,
            time: Math.floor(Date.now()/1000) - 21000
          },
          {
            id: "eglise-2",
            type: "video",
            length: 9,
            src: "https://filesamples.com/samples/video/mp4/sample_640x360.mp4",
            preview: "https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=300&auto=format",
            seen: true,
            time: Math.floor(Date.now()/1000) - 20050
          },
          {
            id: "eglise-3",
            type: "photo",
            length: 5,
            src: "https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1200&auto=format",
            preview: "https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=300&auto=format",
            seen: false,
            time: Math.floor(Date.now()/1000) - 19900
          }
        ]
      }
    ];

	  try {
		var storiesOptions = {
		  rtl: false,
		  skin: 'snapgram',
		  avatars: true,
		  stories: demoStories, // Array of stories data
		  backButton: true,
		  backNative: false,
		  paginationArrows: true,
		  previousTap: true,
		  autoFullScreen: false,
		  openEffect: true,
		  cubeEffect: true,
		  list: false,
		  localStorage: false,
		  callbacks: {
			onOpen(storyId, callback) {
			  currentStoryId = storyId; // Update the ID of the currently opened story
			  var story = demoStories.find(s => s.id === storyId);

			  if (story) {
				// Use an event or a delay
				setTimeout(() => {
				  var items = story.items; // Retreive all items
				  var timeElements = document.querySelectorAll('#zuck-modal-content .story-viewer .head .left .info .time');

				  // Ensure there is "timeElement" for each item
				  if (timeElements.length > 0 && items.length > 0) {
					// console.log(timeElements);

					items.forEach((item, index) => {
					  // Check if the index does not exceed the number of time elements
					  if (timeElements[index]) {
						timeElements[index].innerHTML = item.timeago; // Replace "timestamp" by "timeAgo" for each item
					  }
					});

				  } else {
					console.error('No time elements or items found');
				  }
				}, 300); // Increase the delay if necessary
			  }
			  callback();  // on open story viewer
			},
			onView: function (storyId) {
			  var story = demoStories.find(s => s.id === storyId);

			  if (story) {
				// Retrieve the currently displayed item based on "currentItemIndex"
				var item = story.items[currentItemIndex];

				console.log(currentIpAddr);

				if (item) {
				  if (!item.seen) {
					var updateConsultationHistory = $.ajax({
					  headers: {
						'Authorization': 'Bearer ' + appRef.split('-')[0],
						'X-localization': navigator.language,
						'X-user-id': currentUser,
						'X-ip-address': currentIpAddr
					  },
					  method: 'GET',
					  contentType: 'application/json',
					  url: `${apiHost}/post/${item.apiid}`
					});

					console.log(`API ID: ${item.apiid}`);
					console.log(`API Response: ${updateConsultationHistory.data}`);
				  }
				}
			  }
			},
			onEnd(storyId, callback) {
			  callback();  // on end story
			  currentItemIndex = 0; // Reset index when story ends
			},
			onClose(storyId, callback) {
			  callback();  // on close story viewer
			  currentItemIndex = 0; // Reset index when closing display
			},
			onNavigateItem(storyId, nextStoryId, callback) {
			  var story = demoStories.find(s => s.id === storyId);

			  if (story) {
				// Update "currentItemIndex" based on navigation
				currentItemIndex = (currentItemIndex + 1) % story.items.length; // Manage the cycle
			  }

			  callback();  // on navigate item of story

			  // Retrieve current item after navigation
			  var item = story.items[currentItemIndex];

			  if (item) {
				console.log('API ID (navigated):', item.apiid);
			  }
			},
			onDataUpdate(currentState, callback) {
			  callback(); // use to update state on your reactive framework
			}
		  }
		};
		var storiesElement = document.querySelector('#stories');

		// Initialize Zuck.js
		stories = Zuck(storiesElement, storiesOptions);

	  } catch (err) {
		console.log('Error in fetchStories:', err);
	  }
  </script>
</body>
</html>
