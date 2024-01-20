var players = [];
$.fn.stylise = function (options) {

  const flags = {
    isSingleChannel: true,
    resetPeersOnPlay: true
  };

  const settings = $.extend({ mode: 'single-reset' }, options);

  switch (settings.mode) {
    case 'single-reset':
    case 1:
      flags.isSingleChannel = true;
      flags.resetPeersOnPlay = true;
      break;
    case 'single-pause':
    case 2:
      flags.isSingleChannel = true;
      flags.resetPeersOnPlay = false;
      break;
    case 'multi':
    case 3:
      flags.isSingleChannel = false;
      flags.resetPeersOnPlay = false;
      break;
    default:
      console.warn(
        `The stylised mode '${settings.mode}' is not supported.
Please instead choose from
 * single-reset - to have a single active player which resets others when played
 * single-pause - to have a single active player which pauses others when played, or
 * multi - to allow all players to be active simultaneously`);
  }

  


  function pad(str, max) {
    str = str.toString();
    return str.length < max ? pad(`0${str}`, max) : str;
  }

  function getProgressReadout(e, d) {
    const se = parseInt(e % 60);
    const me = parseInt((e / 60) % 60);
    const sd = parseInt(d % 60);
    const md = parseInt((d / 60) % 60);
    return `${me}:${pad(se, 2)} of ${md}:${pad(sd, 2)}`;
  }

  function playFromPosition(e, id) {
    const x = e.pageX - $(`#${id} p`).offset().left;
    const player = players.find(e => e.id === id);
    const ew = $(`#${id} p`).width();
    const d = player.controls.duration;
    player.controls.currentTime = d * (x / ew);
    play(id);
  }

  function restart(id) {
    $(`.stylised-play`).show();
    $(`.stylised-pause`).hide();

    const player = players.find(e => e.id === id);
    player.controls.currentTime = 0;
    player.controls.pause();
    $(`#${player.id} .stylised-play`).show();
    $(`#${player.id} .stylised-pause`).hide();
  }

  function pause(id) {

    if (flags.isSingleChannel) {
      $(`.stylised-play`).show();
      $(`.stylised-pause`).hide();
    }

    const player = players.find(e => e.id === id);
    player.controls.pause();
    $(`#${player.id} .stylised-play`).show();
    $(`#${player.id} .stylised-pause`).hide();

  }

  function play(id) {
    // console.log('Total voices: ' + players.length)
    console.log(id)
    for (let i = 0; i < players.length; i++) {
      const player = players[i];
      if (player.id === id) {
        $(`#${player.id} .stylised-pause`).show();
        $(`#${player.id} .stylised-play`).hide();
        player.controls.play();
      } else {
        if (flags.isSingleChannel) {
          $(`#${player.id} .stylised-play`).show();
          $(`#${player.id} .stylised-pause`).hide();
          player.controls.pause();

          if (flags.resetPeersOnPlay) {
            player.controls.currentTime = 0;
          }
        }
      }
    }
  }

  function updateReadout(player) {
    const c = player.controls.currentTime;
    const d = player.controls.duration;
    const r = getProgressReadout(c, d);
    //$(`#${player.id} p`).text(r);
    $(`#${player.id} .stylised-time-progress`).width(`${c / d * 100}%`);
    if (c / d === 1) {
      restart(id);
    }
  }

  return this.each(function (index) {

    const src = $(this).attr('src');
    var id, getControls, replacementMarkup;
    if ($(this).is('audio')) {
      id = `generated-audio-player-${index}`;
      id = $(this).attr('data-audioid'); //////////////////
      getControls = () => new Audio($(this).children('source').attr('src'));
      replacementMarkup =
        `<div class="stylised-player audio" id='${id}'>
          <div class="stylised-pause">
            <div class="stylised-pause-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><path d="M11 22h-4v-20h4v20zm6-20h-4v20h4v-20z" fill="#FFFFFF"/></svg></div>
          </div>
          <div class="stylised-play">
            <div class="stylised-play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2 24v-24l20 12-20 12z" fill="#FFFFFF"/></svg></div>
          </div>
          <p>` + $(this).attr('data-title') + `</p>
          <div class="stylised-time-wrapper">
            <div class="stylised-time-progress" style="width: 0%;"></div>
          </div>
        </div>`;

    } else if ($(this).is('video')) {
      id = `generated-video-player-${index}`;
      
      getControls = () => document.getElementById(id + '-screen');
      replacementMarkup =
        `<video height="auto" src="${src}" id='${id}-screen'></video>
         <div class="stylised-player" class="video" id='${id}'>
          <div class="stylised-pause">
            <div class="stylised-pause-icon"></div>
            <h3>Pause</h3>
          </div>
          <div class="stylised-play">
            <div class="stylised-play-icon"></div>
            <h3>Listen</h3>
          </div>
          <p>Loading...</p>
          <div class="stylised-time-wrapper">
            <div class="stylised-time-progress" style="width: 0%;"></div>
          </div>

        </div>`;

    } else {
      console.warn("Element detected was not of type AUDIO or VIDEO and is not supported.");
      return;
    }

    $(this).replaceWith(replacementMarkup);
    var player = { id: id, controls: getControls() };
    $(`#${id} p, #${id} .stylised-time-wrapper, #${id} .stylised-time-progress`).click((e) => playFromPosition(e, id));
    $(`#${id} .stylised-pause`).click(() => pause(id));
    $(`#${id} .stylised-play`).click(() => play(id));
    $(`#${id} .stylised-restart`).click(() => restart(id));

    player.controls.ontimeupdate = () => { updateReadout(player); };
    player.controls.onloadedmetadata = () => { updateReadout(player); };
    //player.controls.onseeking = () => { $(`#${id} p`).text("Loading..."); };
    player.controls.onseeked = () => { updateReadout(player); };
    player.controls.onended = () => { restart(id); };
    players.push(player);
  });
  
};