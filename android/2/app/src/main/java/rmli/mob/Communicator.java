package rmli.mob;

/**
 * Created by Tammo on 19.11.2016.
 */

import retrofit.RestAdapter;



        import retrofit.RestAdapter;

/**
 * Created by Tammo on 19.11.2016.
 */
public class Communicator {
    private static  final String TAG = "Communicator";
    private static final String SERVER_URL = "http://budde.ws";

    public void loginPost(String username, int error){
        RestAdapter restAdapter = new RestAdapter.Builder()
                .setEndpoint(SERVER_URL)
                .setLogLevel(RestAdapter.LogLevel.FULL)
                .build();
        Interface communicatorInterface = restAdapter.create(Interface.class);
        communicatorInterface.postData(username, error);
    }
}
