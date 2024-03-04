<section class="video" id="video-section">
    <div class="container">
        <div class="video-container" data-aos="zoom-in" data-aos-delay="150">
            <video id="video" disableRemotePlayback src="{{ asset('video') }}/teaser.mp4"
                poster="{{ asset('img') }}/thumbnail.webp"></video>
            <span class="custom-loader"></span>
            <div class="player-state">
                <span class="state-btn state-backward">
                    <ion-icon name="play-back-outline"></ion-icon>
                    <span class="backward-duration">5</span>
                </span>
                <span class="main-state state-btn">
                    <ion-icon name="play-outline"></ion-icon>
                </span>
                <span class="state-btn state-forward">
                    <span class="forward-duration">5</span>
                    <ion-icon name="play-forward-outline"></ion-icon>
                </span>
            </div>
            <div class="controls">
                <div class="duration">
                    <div class="current-time"></div>
                    <div class="hover-time">
                        <span class="hover-duration"></span>
                    </div>
                    <div class="buffer"></div>
                </div>
                <div class="btn-controls">
                    <div class="btn-con">
                        <span class="play-pause control-btn">
                            <ion-icon name="play-outline"></ion-icon>
                        </span>
                        <span class="volume">
                            <span class="mute-unmute control-btn">
                                <ion-icon name="volume-high-outline"></ion-icon>
                            </span>
                            <div class="max-vol">
                                <div class="current-vol"></div>
                            </div>
                        </span>
                        <span class="time-container">
                            <span class="current-duration">0:00</span>
                            <span>/</span>
                            <span class="total-duration">0:00</span>
                        </span>
                    </div>
                    <div class="right-controls">
                        <span class="backward control-btn" title="5 backward">
                            <ion-icon name="play-back-outline"></ion-icon>
                        </span>
                        <span class="forward control-btn" title="5 forward">
                            <ion-icon name="play-forward-outline"></ion-icon>
                        </span>
                        <span class="mini-player control-btn">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="settings control-btn">
                            <span class="setting-btn">
                                <ion-icon name="options-outline"></ion-icon>
                            </span>
                            <ul class="setting-menu">
                                <li data-value="0.25">0.25x</li>
                                <li data-value="0.5">0.5x</li>
                                <li data-value="0.75">0.75x</li>
                                <li data-value="1" class="speed-active">1x</li>
                                <li data-value="1.25">1.25x</li>
                                <li data-value="1.5">1.5x</li>
                                <li data-value="1.75">1.75x</li>
                                <li data-value="2">2x</li>
                            </ul>
                        </span>
                        <span class="theater-btn control-btn">
                            <span class="theater-default">
                                <ion-icon name="tablet-landscape-outline"></ion-icon>
                            </span>
                            <span class="theater-active">
                                <ion-icon name="tv-outline"></ion-icon>
                            </span>
                        </span>
                        <span class="fullscreen-btn control-btn" title="fullscreen">
                            <span class="full">
                                <ion-icon name="scan-outline"></ion-icon>
                            </span>
                            <span class="contract">
                                <ion-icon name="contract-outline"></ion-icon>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
