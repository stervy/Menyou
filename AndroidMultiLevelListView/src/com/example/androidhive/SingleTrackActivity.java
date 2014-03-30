package com.example.androidhive;

import java.util.ArrayList;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.text.Html;
import android.util.Log;
import android.widget.TextView;

import com.example.androidhive.helper.AlertDialogManager;
import com.example.androidhive.helper.ConnectionDetector;
import com.example.androidhive.helper.JSONParser;

public class SingleTrackActivity extends Activity {
	// Connection detector
	ConnectionDetector cd;
	
	// Alert dialog manager
	AlertDialogManager alert = new AlertDialogManager();
	
	// Progress Dialog
	private ProgressDialog pDialog;

	// Creating JSON Parser object
	JSONParser jsonParser = new JSONParser();

	// tracks JSONArray
	JSONArray albums = null;
	
	// Album id
	String album_id = null;
	String song_id = null;
	
	String album_name, song_name, duration;

	// single song JSON url
	// GET parameters album, song
	private static final String URL_SONG = "http://api.androidhive.info/songs/track.php";

	// ALL JSON node names
	private static final String TAG_NAME = "name";
	private static final String TAG_DURATION = "duration";
	private static final String TAG_ALBUM = "album";
	
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_single_track);
		
		cd = new ConnectionDetector(getApplicationContext());
		 
        // Check if Internet present
        if (!cd.isConnectingToInternet()) {
            // Internet Connection is not present
            alert.showAlertDialog(SingleTrackActivity.this, "Internet Connection Error",
                    "Please connect to working Internet connection", false);
            // stop executing code by return
            return;
        }
        
        // Get album id, song id
        Intent i = getIntent();
        album_id = i.getStringExtra("album_id");
        song_id = i.getStringExtra("song_id");
        
        // calling background thread
        new LoadSingleTrack().execute();
	}
	
	/**
	 * Background Async Task to get single song information
	 * */
	class LoadSingleTrack extends AsyncTask<String, String, String> {

		/**
		 * Before starting background thread Show Progress Dialog
		 * */
		@Override
		protected void onPreExecute() {
			super.onPreExecute();
			pDialog = new ProgressDialog(SingleTrackActivity.this);
			pDialog.setMessage("Loading song ...");
			pDialog.setIndeterminate(false);
			pDialog.setCancelable(false);
			pDialog.show();
		}

		/**
		 * getting song json and parsing
		 * */
		protected String doInBackground(String... args) {
			// Building Parameters
			List<NameValuePair> params = new ArrayList<NameValuePair>();
			
			// post album id, song id as GET parameters
			params.add(new BasicNameValuePair("album", album_id));
			params.add(new BasicNameValuePair("song", song_id));

			// getting JSON string from URL
			String json = jsonParser.makeHttpRequest(URL_SONG, "GET",
					params);

			// Check your log cat for JSON reponse
			Log.d("Single Track JSON: ", json);

			try {
				JSONObject jObj = new JSONObject(json);
				if(jObj != null){
					song_name = jObj.getString(TAG_NAME);
					album_name = jObj.getString(TAG_ALBUM);
					duration = jObj.getString(TAG_DURATION);					
				}			

			} catch (JSONException e) {
				e.printStackTrace();
			}

			return null;
		}

		/**
		 * After completing background task Dismiss the progress dialog
		 * **/
		protected void onPostExecute(String file_url) {
			// dismiss the dialog after getting song information
			pDialog.dismiss();
			
			// updating UI from Background Thread
			runOnUiThread(new Runnable() {
				public void run() {
					
					TextView txt_song_name = (TextView) findViewById(R.id.song_title);
					TextView txt_album_name = (TextView) findViewById(R.id.album_name);
					TextView txt_duration = (TextView) findViewById(R.id.duration);
					
					// displaying song data in view
					txt_song_name.setText(song_name);
					txt_album_name.setText(Html.fromHtml("<b>Album:</b> " + album_name));
					txt_duration.setText(Html.fromHtml("<b>Duration:</b> " + duration));
					
					// Change Activity Title with Song title
					setTitle(song_name);
				}
			});

		}

	}
}
