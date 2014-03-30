package vatsag.samples.weatherdisplay;

import java.awt.Menu;

import sun.rmi.runtime.Log;


public class SampleActivity extends Activity {
	
	String position = "1";
	String city = "";
	String weather = "";
	String temperature = "";
	String windSpeed = "";
	String iconfile = "";
	ImageButton imgWeatherIcon;
	
	TextView tvcity;
	TextView tvtemp;
	TextView tvwindspeed;
	TextView tvCondition;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.detailpage);
        
		try {
			
			//handle for the UI elements 
			imgWeatherIcon = (ImageButton) findViewById(R.id.imageButtonAlpha);
			//Text fields
			tvcity = (TextView) findViewById(R.id.textViewCity);
			tvtemp = (TextView) findViewById(R.id.textViewTemperature);
			tvwindspeed = (TextView) findViewById(R.id.textViewWindSpeed);
			tvCondition = (TextView) findViewById(R.id.textViewCondition);
			
			// Get position to display
	        Intent i = getIntent();
	        
	        this.position = i.getStringExtra("position");
	        this.city = i.getStringExtra("city");
	        this.weather=	i.getStringExtra("weather");
	        this.temperature =  i.getStringExtra("temperature");
	        this.windSpeed =  i.getStringExtra("windspeed");
	        this.iconfile = i.getStringExtra("icon");
	        
	        String uri = "drawable/"+ "d" + iconfile;
	        int imageBtnResource = getResources().getIdentifier(uri, null, getPackageName());
		    Drawable dimgbutton = getResources().getDrawable(imageBtnResource);
		
		    
		    //text elements
		    tvcity.setText(city);
		    tvtemp.setText(temperature);
		    tvwindspeed.setText(windSpeed);
		    tvCondition.setText(weather);
		    
		    //thumb_image.setImageDrawable(image);
		    imgWeatherIcon.setImageDrawable(dimgbutton);
		
			
		}
		
		catch (Exception ex) {
			Log.e("Error", "Loading exception");
		}
		
    }
	 
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
}
