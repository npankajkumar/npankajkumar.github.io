import java.util.*;
class largest {
    public static void main(String[] args) {
     int a,b,c,d,f,e,g;
     Scanner s= new Scanner(System.in);
     a=s.nextInt();
     b=s.nextInt();
     c=s.nextInt();
     d=s.nextInt();
     g=s.nextInt();
     f=(((a>b)?a:b)>((c>d)?c:d))?((a>b)?a:b):((c>d)?c:d);
     e=(g>f)?g:f;
     System.out.println("largest = " + e);
}
}
import java.util.*;
class largest {
    public static void main(String[] args) {
     int a,b,c,d,e,f,g,h,i,j,k,l,m,y;
     Scanner s= new Scanner(System.in);
     a=s.nextInt();
     b=s.nextInt();
     c=s.nextInt();
     d=s.nextInt();
     e=s.nextInt();
     f=s.nextInt();
     g=s.nextInt();
     h=s.nextInt();
     i=s.nextInt();
     j=s.nextInt();
     k=(((a>b)?a:b)>((c>d)?c:d))?((a>b)?a:b):((c>d)?c:d);
     l=(e>k)?e:k;
     m=(((f>g)?f:g)>((h>i)?h:i))?((f>g)?f:g):((h>i)?h:i);
     y=(j>m)?j:m;
     System.out.println("largest = " + y);
}
}
import java.util.*;
class largest {
    public static void main(String[] args) {
     Scanner s= new Scanner(System.in);
     while(true)
     {
         int z;
         z=s.nextInt();
         String leap=(z%4==0&&z%100!=0)?"leap":(z%400==0)?"leap":"not leap";
     System.out.println("largest = " + leap);
     }
}
}
import java.util.*;
class HelloWorld {
    public static void main(String[] args) {
       int a,b;
       Scanner w=new Scanner(System.in);
       a=w.nextInt();
       b=w.nextInt();
       String g=Integer.toString(b);
        String s=Integer.toString(a);
        char h=g.charAt(0);
        for(int i=0;i<a;i++)
        {
        int j=0;
        if(h!=s.charAt(j) )
        {
            j++;
            if(j==s.length())
            {
                System.out.println(a);
            }
         }
       }
       a--;
        System.out.println(a);
           
       }
    }