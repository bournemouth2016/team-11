package rmli.mob;

/**
 * Created by Tammo on 19.11.2016.
 */

import retrofit2.http.FormUrlEncoded;


        import retrofit2.http.Field;
        import retrofit2.http.FormUrlEncoded;
        import retrofit2.http.GET;
        import retrofit2.http.POST;
        import retrofit2.http.Query;

/**
 * Created by Tammo on 19.11.2016.
 */
public interface Interface {

    //This method is used for "POST"
    @FormUrlEncoded
    @POST("/incident.php")
    void postData(@Field("username") String username,
                  @Field("error") int error);}

