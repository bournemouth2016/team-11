package rlmi.manob;

import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;


import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;


public class MainActivity extends AppCompatActivity {
String result="";
String user="1";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        @Override
        public void onTokenRefresh() {
            // Get updated InstanceID token.
            String refreshedToken = FirebaseInstanceId.getInstance().getToken();

            // If you want to send messages to this application instance or
            // manage this apps subscriptions on the server side, send the
            // Instance ID token to your app server.
            String one="";
            try {
                one =
                        "token=" + URLEncoder.encode(refreshedToken, "UTF-8"),
                        "id=" + URLEncoder.encode(user, "UTF-8");
            } catch (UnsupportedEncodingException e) {
                e.printStackTrace();
            }
            executePost("http://budde.ws/token.php", one);
        }
        super.onCreate(savedInstanceState);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);

        setContentView(R.layout.activity_main);
        ImageButton imageButton = (ImageButton) findViewById(R.id.imageButton);

        imageButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                result=usePost("123", "1");
            }
        });


        ImageButton imageButton2 = (ImageButton) findViewById(R.id.imageButton2);
        imageButton2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                result=usePost("123", "2");
            }
        });
        ImageButton imageButton3 = (ImageButton) findViewById(R.id.imageButton3);
        imageButton3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                result=usePost("123", "3");
            }
        });
        ImageButton imageButton4 = (ImageButton) findViewById(R.id.imageButton4);
        imageButton4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                result=usePost("123", "4");
            }
        });

    }

    public String usePost(String username, String error) {
        String one="";
        try {
            one =
                    "username=" + URLEncoder.encode(username, "UTF-8") +
                            "&error=" + URLEncoder.encode(error, "UTF-8");
        } catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }
        return executePost("http://budde.ws/incident.php", one);

    }
    public static String executePost(String targetURL, String urlParameters) {
        HttpURLConnection connection = null;

        try {
            //Create connection
            URL url = new URL(targetURL);
            connection = (HttpURLConnection) url.openConnection();
            connection.setRequestMethod("POST");
            connection.setRequestProperty("Content-Type",
                    "application/x-www-form-urlencoded");

            connection.setRequestProperty("Content-Length",
                    Integer.toString(urlParameters.getBytes().length));
            connection.setRequestProperty("Content-Language", "en-US");

            connection.setUseCaches(false);
            connection.setDoOutput(true);

            //Send request
            DataOutputStream wr = new DataOutputStream (
                    connection.getOutputStream());
            wr.writeBytes(urlParameters);
            wr.close();

            //Get Response
            InputStream is = connection.getInputStream();
            BufferedReader rd = new BufferedReader(new InputStreamReader(is));
            StringBuilder response = new StringBuilder(); // or StringBuffer if Java version 5+
            String line;
            while ((line = rd.readLine()) != null) {
                response.append(line);
                response.append('\r');
            }
            rd.close();
            return response.toString();
        } catch (Exception e) {
            e.printStackTrace();
            return null;
        } finally {
            if (connection != null) {
                connection.disconnect();
            }
        }
    }
}

