<?php
/**
 * Created by PhpStorm.
 * User: Personne
 * Date: 23/06/2015
 * Time: 19:47
 */
?>

<div class="container">
    <form action = "" ng-controller="formController">
        <div class="quote-part-form">
            <h3>La citation <span class="label label-success">+25</span></h3>
            <p>Chaque input représente une ligne.</p>
            <div class="form-group">
                <input type = "text" class="form-control" name="quote-line-1" required placeholder="Ligne #1"/>
            </div>
                <div class = "form-group">
                    <input type = "text" class="form-control" name="quote-line-2" placeholder="Ligne #2"/>
                </div>
                <div class = "form-group">
                    <input type = "text" class="form-control" name="quote-line-3" placeholder="Ligne #3"/>
                </div>
                <div class = "form-group">
                    <input type = "text" class="form-control" name="quote-line-4" placeholder="Ligne #4"/>
                </div>
        </div>
        <div class="song-part-form col-md-6">
            <h3>Le morceau <span class="label label-success">+20</span></h3>
            <div class="form-group">
                <label for = "artist-name-song-quote">Artist</label>
                <input type = "text" class="form-control" name="artist-name-song-quote" placeholder="Nom artist" ng-model="artist.name"/>
            </div>
            <div class="form-group">
                <label for = "title-song-quote">Titre</label>
                <input type = "text" class="form-control" name="title-song-quote" placeholder="Titre du morceau"/>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">http://youtube.com/watch?v=</span>
                <input type="text" class="form-control" name="link-yt-song-quote" placeholder="Lien Youtube du morceau" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="album-part-form col-md-6">
            <h3>L'album <span class="label label-success">+15</span></h3>
            <div class="form-group">
                <label for = "album-name-song-quote">Titre album</label>
                <input id = "album-name-song-quote" class="form-control" type = "text" placeholder="Titre album" />
            </div>
            <div class="form-group">
                <label for = "artist-album-name-song-quote">Artiste album</label>
                <input type = "text" id="artist-album-name-song-quote" class="form-control" placeholder="Artist de l'album" ng-model="artistTwo"/>
            </div>
            <div class="form-group">
                <label for = "cover-album-song-quote">Cover de l'album</label>
                <input id = "cover-album-song-quote" type = "file" />
                <p class="help-block">Meilleure qualité possible bébé</p>
            </div>
        </div>
        <div class="submit-part-form col-md-12">
            <button class="btn btn-primary">Envoyer la citation</button>
        </div>
    </form>
</div>